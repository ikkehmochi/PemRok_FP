<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\NewsModel;

class NewsController extends ResourceController
{
    // Post
    public function addNews()
    {
        $rules = [
            "title" => "required",
            "description" => "required"
        ];

        if(!$this->validate($rules)) {
            $response = [
                "status" => false,
                "message" => $this->validator->getErrors(),
                "data" => [] 
            ];
        }else {
            
            if (! auth()->user()->inGroup('administrator')) {
                $response = [
                    "status" => false,
                    "message" => "User is not administrator",
                    "data" => []
                ];
            }else {
                // News Model
                $news = new NewsModel();

                $request = \Config\Services::request();

                // News Entity
                $new = [
                    "title" => $request->getPost("title"),
                    "description" => $request->getPost("description"),
                ];

                $imageFile = $this->request->getFile("image");
                if(!empty($imageFile)) {
                    $imageName = $imageFile->getName();
        
                    // abc.png
                    $imageArrays = explode(".", $imageName);
        
                    // ["abc", "png"]
                    $newImageName = round(microtime(true)) . "." . end($imageArrays);

                    if($imageFile->move("images/suppliers/data", $newImageName)) {
                        $new['image'] = $newImageName;
                    }else {
                        $response = [
                            "status" => false,
                            "message" => "Failed to upload data",
                            "data" => []
                        ];
                    }
                }

                $news->save($new);
    
                $response = [
                    "status" => true,
                    "message" => "News saved successfully",
                    "data" => []
                ];
            }

        }

        return $this->respondCreated($response);
    }

    // Get
    public function listNews()
    {
        $news = new NewsModel();
        $news = $news->findAll();

        $response = [
            "status" => true,
            "message" => "List of news",
            "data" => $news
        ];

        return $this->respondCreated($response);
    }

    // Put
    public function updateNews($news_id)
    {
        if(!auth()->user()->inGroup('administrator')){
            $response = [
                "status" => false,
                "message" => "User is not administrator",
                "data" => []
            ];
        }else {
            $news = new NewsModel();

            $request = \Config\Services::request();
            $data = $request->getPost();
            unset($data["_method"]);
            
            $imageFile = $this->request->getFile("image");
            if(!empty($imageFile)) {
                $imageName = $imageFile->getName();
    
                // abc.png
                $imageArrays = explode(".", $imageName);
    
                // ["abc", "png"]
                $newImageName = round(microtime(true)) . "." . end($imageArrays);

                if($imageFile->move("images/news", $newImageName)) {
                    unlink('images/news/' . $data['old_image']);
                    $data['image'] = $newImageName;
                }else {
                    $response = [
                        "status" => false,
                        "message" => "Failed to upload image",
                        "data" => []
                    ];
                }
            }

            if($news->update($news_id, $data)) {
                $response = [
                    "status" => true,
                    "message" => "Profile updated successfuly",
                    "data" => []
                ];
            }
        }

        return $this->respondCreated($response);
    }

    // Delete
    public function deleteNews($news_id)
    {
        if(!auth()->user()->inGroup('administrator')){
            $response = [
                "status" => false,
                "message" => "User is not administrator",
                "data" => []
            ];
        }else {
            $news = new NewsModel();
        
            if(!$news->delete($news_id, true)) {
                $response = [
                    "status" => false,
                    "message" => "Failed to delete News",
                    "data" => []
                ];
            }else {
                $response = [
                    "status" => true,
                    "message" => "News deleted successfully",
                    "data" => []
                ];
            }
        }

        return $this->respondCreated($response);
    }
}
