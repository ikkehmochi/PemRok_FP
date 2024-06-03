<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Shield\Models\GroupModel;
use App\Models\SuppliersModel;

class SupplierController extends ResourceController
{
    // Get
    public function profile()
    {
        if(!auth()->user()->inGroup('supplier')){
            $response = [
                "status" => false,
                "message" => "User is not administrator, manajer, or supplier",
                "data" => []
            ];
        }else {
            $users = new SuppliersModel();
            $user = $users->where("supplier_id", auth()->id())->first();

            $response = [
                "status" => true,
                "message" => "Profile information of logged in user",
                "data" => $user
            ];
        }

        return $this->respondCreated($response);
    }

    // Get
    public function list()
    {
        
        if(! auth()->user()->inGroup('administrator', 'manajer')) {
            $response = [
                "status" => false,
                "message" => "User is not administrator or manajer",
                "data" => []
            ];
        }else {
            $groupUsers = new GroupModel();
            $groupUsers = $groupUsers->where('group', 'supplier')->findColumn('id');

            $users = auth()->getProvider();
            $list = [];
            foreach($groupUsers as $user_id) {
                array_push($list, $users->findById($user_id));
            }

            $response = [
                "status" => true,
                "message" => "List of Supplier",
                "data" => [
                    "list" => $list
                ]
            ];
        }

        return $this->respondCreated($response);
    }

    // Get
    public function single($supplier_id)
    {
        
        if(! auth()->user()->inGroup('administrator', 'manajer')) {
            $response = [
                "status" => false,
                "message" => "User is not administrator", 'manajer',
                "data" => []
            ];
        }else {
            $user = auth()->getProvider()->findById($supplier_id);

            $response = [
                "status" => true,
                "message" => "Detail of Supplier",
                "data" => $user
            ];
        }

        return $this->respondCreated($response);
    }
    
    // Put
    public function updateData()
    {
        if(!auth()->user()->inGroup('supplier')){
            $response = [
                "status" => false,
                "message" => "User is not supplier",
                "data" => []
            ];
        }else {
            $users = new SuppliersModel();
            $user = $users->where("supplier_id", auth()->id())->first();

            $request = \Config\Services::request();
            $data = $request->getPost();
            unset($data["_method"]);
            
            $imageFile = $this->request->getFile("avatar");
            if(!empty($imageFile)) {
                $imageName = $imageFile->getName();
    
                // abc.png
                $imageArrays = explode(".", $imageName);
    
                // ["abc", "png"]
                $newImageName = round(microtime(true)) . "." . end($imageArrays);

                if($imageFile->move("images/suppliers/avatar", $newImageName)) {
                    unlink('images/suppliers/avatar/' . $data['old_avatar']);
                    $data['avatar'] = $newImageName;
                }else {
                    $response = [
                        "status" => false,
                        "message" => "Failed to upload avatar",
                        "data" => []
                    ];
                }
            }
            
            $imageFile = $this->request->getFile("data");
            if(!empty($imageFile)) {
                $imageName = $imageFile->getName();
    
                // abc.png
                $imageArrays = explode(".", $imageName);
    
                // ["abc", "png"]
                $newImageName = round(microtime(true)) . "." . end($imageArrays);

                if($imageFile->move("images/suppliers/data", $newImageName)) {
                    unlink('images/suppliers/data/' . $data['old_data']);
                    $data['data'] = $newImageName;
                }else {
                    $response = [
                        "status" => false,
                        "message" => "Failed to upload data",
                        "data" => []
                    ];
                }
            }

            if($users->update($user["id"], $data)) {
                $response = [
                    "status" => true,
                    "message" => "Profile updated successfully",
                    "data" => []
                ];
            }else {
                $response = [
                    "status" => false,
                    "message" => "Failed to update user",
                    "data" => []
                ];
            }
        }

        return $this->respondCreated($response);
    }

    // Delete
    public function deleteSupplier($supplier_id)
    {
        if(!auth()->user()->inGroup('administrator')){
            $response = [
                "status" => false,
                "message" => "User is not administrator",
                "data" => []
            ];
        }else {
            $users = auth()->getProvider();
        
            if(!$users->delete($supplier_id, true)) {
                $response = [
                    "status" => false,
                    "message" => "Failed to delete supplier user",
                    "data" => []
                ];
            }else {
                $response = [
                    "status" => true,
                    "message" => "Supplier user deleted successfully",
                    "data" => []
                ];
            }
        }

        return $this->respondCreated($response);
    }
}
