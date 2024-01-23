<?php 

namespace App\Services;

use App\Models\Slider;
use Illuminate\Support\Arr;

class SliderService {

    public function getData(array $data ,int $paginate = 15){
        return  Slider::orderBy('id','desc')->paginate($paginate);
    }

    public function store(array $data){
        $slider =  Slider::create( Arr::except($data , 'image'));
        if(isset($data['image'])){
            $slider->storeFile($data['image']);
        }
        return $slider;
    }

    public function update($slider ,$data){
       
        $slider->update(Arr::except($data,['image']));
        if(isset($data['image'])){
            $slider->updateFile($data['image']);
        }
        return $slider;
    }

    public function delete($slider){
        $slider->deleteFiles();
        $slider->delete();
    }

}