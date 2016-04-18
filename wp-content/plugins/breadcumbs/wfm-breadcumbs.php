<?php
/*
Plugin Name: Хлебные крошки в title
Description: Добавляем полный путь в title страниц. Для корректной работы плагина,
тег title шаблона header.php должен выглядеть так: &lt;title&gt;&lt;?php wp_title(); ?&gt;&lt;/title&gt;
Plugin URI: http://webformyself.com
Author: Андрей
Author URI: http://webformyself.com
*/

add_filter('wp_title', 'wfm_title' , 20);

function wfm_title($title){
    $title = null;
    $sep = ' - ';
    $site = get_bloginfo('name');

    //главная страница
    if(is_home() || is_front_page()){
        $title = array($site);
    }

    //постоянная страница

    elseif( is_page() ){
        $title = array( get_the_title() , $site );
    }

    //тег
    elseif( is_tag() ){
        $title = array( single_tag_title('Метка ', false) , $site );
    }

    //поиск
    elseif( is_search() ){
        $title = array( "Результаты поиска по запросу " . get_search_query() );
    }

    //категории
    elseif( is_category() ){

        // ID категории
        $cat_id = get_query_var( 'cat' );

        //данные категории
        $cat = get_category($cat_id);

        if( $cat->parent ){
            //есть родительская категория
            $categories= rtrim( get_category_parents( $cat_id , false , $sep ) ) ;
            $categories = explode($sep, $categories);
            $title = array_reverse($categories);
            $title[] = $site;
        }else{
            // самостоятельная категория
            $title = array($cat->name , $site);
            }
        }

    // запись
    if( is_single() ){
        //массив данных о категориях
        $category = get_the_category();
        //ID категории
        $cat_id = $category[0]->cat_ID;
        //родительские категории
        $categories= rtrim( get_category_parents( $cat_id , false , $sep ) ) ;
        $categories = explode($sep, $categories);
        $categories[] = get_the_title();
        $title = array_reverse($categories);
        $title[] = $site;
    }

    //архив
    elseif( is_archive() ){
        $title = array( 'Архив за ' . get_the_time("F Y") , $site );
    }

    //404
    elseif( is_404() ){
        $title = array( 'Страница не найдена' );
    }
    $title = implode($sep, $title);

    return $title;
}
