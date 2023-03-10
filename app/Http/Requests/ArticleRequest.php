<?php

namespace App\Http\Requests;

class ArticleRequest extends BaseRequest
{
    protected $rules = [
        'list'=>[
            'status'=>['integer','required']
        ],
        'article'=>[
            'id'=>['integer','required'],
        ],
        'add'=>[
            'title'=>['string','max:191','required'],
            'content'=>['string','required'],
            'date'=>['date_format:Y-m-d H:i:s','required'],
            'status'=>['min:0','max:1','required','integer'],
            'comment_status'=>['min:0','max:1','required','integer'],
            'is_top'=>['min:0','max:1','required','integer'],
            'keywords'=>['string','nullable'],
            'description'=>['string','nullable'],
            'category_id'=>['min:1','integer','nullable'],
            'tags'=>['array','required'],
            'cover'=>['image','mimes:jpeg,png,webp','image_min:1','image_max:600','nullable']
        ],
        'update'=>[
            'id'=>['required','integer'],
            'title'=>['string','max:191','required'],
            'content'=>['string','required'],
            'date'=>['date_format:Y-m-d H:i:s','required'],
            'status'=>['min:0','max:1','required','integer'],
            'comment_status'=>['min:0','max:1','required','integer'],
            'is_top'=>['min:0','max:1','required','integer'],
            'keywords'=>['string','nullable'],
            'description'=>['string','nullable'],
            'category_id'=>['min:1','integer','nullable'],
            'tags'=>['array','required'],
            'cover'=>['image','mimes:jpeg,png,webp','image_min:1','image_max:600','nullable']
        ],
        'add_image'=>[
            'img'=>['image','mimes:jpeg,png,webp','image_min:1','image_max:1024']
        ],
        'add_video'=>[
            'video'=>['mimes:mp4,avi','video_min:1','video_max:6144']
        ],
        'delete'=>[
            'ids'=>['array','required']
        ],
        'search'=>[
            'title'=>['string','nullable']
        ]
    ];

    protected $rulesMsg = [
        'list'=>[
            'status'=>'????????????'
        ],
        'article'=>[
            'id'=>'id',
        ],
        'add'=>[
            'cover'=>'????????????',
            'title'=>'????????????',
            'content'=>'????????????',
            'date'=>'????????????',
            'status'=>'????????????',
            'comment_status'=>'??????????????????',
            'is_top'=>'????????????',
            'keywords'=>'???????????????',
            'description'=>'????????????',
            'category_id'=>'??????id',
            'tags'=>'??????ids'
        ],
        'update'=>[
            'id'=>'id',
            'cover'=>'????????????',
            'title'=>'????????????',
            'content'=>'????????????',
            'date'=>'????????????',
            'status'=>'????????????',
            'comment_status'=>'??????????????????',
            'is_top'=>'????????????',
            'keywords'=>'???????????????',
            'description'=>'????????????',
            'category_id'=>'??????id',
            'tags'=>'??????ids'
        ],
        'add_image'=>[
            'img'=>'????????????'
        ],
        'add_video'=>[
            'video'=>'????????????'
        ],
        'delete'=>[
            'ids'=>'id??????'
        ],
        'search'=>[
            'title'=>'????????????'
        ]
    ];



    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->getRules();
    }
}
