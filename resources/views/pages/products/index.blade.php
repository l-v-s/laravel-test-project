@extends('intera_index')

@section('submenu')
    @include('pages.products.submenu')
@endsection

@section('content')

<?
use Menu as LavMenu;

function GetProductRazdelNameById($razdel_id){

    if (isset($razdel_id)){
  //      $razdel_id = 0;
        $razdel = DB::table('providers_razdels')->where('id',$razdel_id)->get();

        if ($razdel != '[]')
            return $razdel[0]->name;
    }
    else
        return '';
}

Menu::make('ProductsMenu', function ($menu) {

    $products = DB::table('products')->where('status','1')->orderBy('id','asc')->get();//->orderBy('position','desc')

    foreach($products as $product){

        $razdel_name = GetProductRazdelNameById($product->razdel);
        if ($razdel_name)
            $razdel_name = " (".$razdel_name.")";
        else
            $razdel_name = "";

        $li = $product->name.$razdel_name;
//        if ($product->color)
  //          $li = "<span style='background-color:".$product->color.";' >".$product->name."</span>-Раздел:";

        /*if (!$product->parent_id){
            $menu->add($li,['url' => 'products/'.$product->id.'/edit', 'id' => $product->id]);
        }
        else
        */
        if ($product){
            $menu->add($li, ['url' => 'products/'.$product->id.'/edit']);
        }
    }
});

?>

{!! !empty(Menu::get('ProductsMenu'))?Menu::get('ProductsMenu')->asol():'нет товаров' !!}

<h6><a class="alert-link" href="/products/create"><u>Добавить товар</u></a></h6>
@stop
