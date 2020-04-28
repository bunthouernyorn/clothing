<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Requests\ProductRequest;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\models\product;

class ProductController extends Controller
{
    public function ListProduct()
    {
        $data['products']=product::paginate(3);
      return view('backend.product.listproduct',$data);
    }

    public function AddProduct()
    {
        return view('backend.product.addproduct');
    }

    public function PostProduct(AddProductRequest $r)
    {
        dd($r);
       // dd($request->all());
       
        // $r called from ProductRequest already... the script below did not work
    //    $r->validate([
    //         'product_code'=>'required|min:3',
    //         'product_name'=>'required|min:3',
    //         'product_price'=>'required|numeric:3',
    //         'product_img'=>'image'
    //    ],[
    //         'product_code.required'=>'Mã sản phẩm không để trống!',
    //         'product_code.min'=>'Mã sản phẩm phải lớn 3 kỹ tự!',
    //         'product_name.required'=>'Tên sản phẩm không để trống!',
    //         'product_.name.min'=>'Tên sản phẩm phải lớn 3 kỹ tự!',
    //         'product_price.required'=>'Giá sản phẩm không đúng định dạng!',
    //         'product_price.numeric'=>'Giá sản phẩm không để trống!',
    //         'product_img.image'=>'File ảnh không đúng định'
    //    ]);
    
        
    }


    public function EditProduct()
    {

        return view('backend.product.editproduct');
    }

    public function PostEditProduct(EditProductRequest $r)
    {
        dd($r);
    

    }
    
    public function DetailAttr()
    {
       return view('backend.attr.attr');
        
    }
    public function EditAttr()
    {
        echo 'Đây là trang sửa quản lý thuộc tính';
    }

    public function EditValue()
    {
        echo 'Đây là trang sửa giá trị thuộc tính';
    }

    public function AddVariant()
    {
        echo 'Thêm biến thể';
    }

    public function EditVariant()
    {
        echo 'Sửa biến thể';
    }
}
