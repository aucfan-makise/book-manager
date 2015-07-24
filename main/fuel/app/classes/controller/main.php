<?php
use Fuel\Core\Controller;
use Fuel\Core\Presenter;
class Controller_Main extends Controller{
    
    public function action_index(){
        $main_view = View::forge('main/index');

        $catalogue_table_presenter = Presenter::forge('main/catalogue');
        $data = new Data\BookDataHandler();
        $catalogue_table_presenter->book_data = $data->getLibraryCatalogueArray();

        $main_view->catalogue_table = $catalogue_table_presenter;

        return Response::forge($main_view);
    }
    
    public function action_404(){
        return Response::forge(Presenter::forge('main/404'));
    }
}