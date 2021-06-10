<?php
namespace App\Http\Controllers\Traits;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
trait ImageUpload
{
    /**
     * Image upload trait used in controllers to upload files
     */
    public function saveImages($file)
    {        
        $file_name = time().'-'.$file->getClientOriginalName();
        $image = Image::make($file);
       $image->stream();
       Storage::disk('local')->put('public/'.env('UPLOAD_PATH') . '/' . $file_name,  $image, 'public');
        return $file_name;
    }
}