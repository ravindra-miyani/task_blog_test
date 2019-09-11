<?php

namespace App;

use Carbon\Carbon;

//use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    // protected $fillable = ['title','body'];
    //protected $guarded - will allow to save into db.

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body,$post_id)
    {
        Comment::create([
            'body' => $body,
            'post_id' => $post_id,
            'user_id' => auth()->id(),
        ]);
    }

    public static function getall(){
        return Post::latest()->Filter(request(['month', 'year']))->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filter)
    {
       /* if (isset($filter['month']) && $month = $filter['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (isset($filter['year']) && $year = $filter['year']) {
            $query->whereYear('created_at', $year);
        }*/
    }

    public static function archieve()
    {
        return static::selectRaw('year(created_at) as year,monthname(created_at) as month,count(*) as d')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
  