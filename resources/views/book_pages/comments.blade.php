@php
    use Carbon\Carbon;
    Carbon::setLocale(app()->getLocale());
@endphp
@extends('layout.template')

@section('title','book detailes')

@section('content')

  <div class="container" data-page="book_comments">
    {{--  include the book navbar  --}}
    @include('layout._books_navbar')
    {{--  start add comment form --}}
    <div class="addComment bg-darkBlue-secondary fixed left-8 bottom-6 w-2/4 text-white"> 
        <form class="flex p-3" method="GET">
          <button class="w-1/6" type="submit">add</button>
          <input id="comment_field" type="hidden" name="commentMessage">
          <p class="w-5/6 bg-darkBlue-dark outline-none transition-all duration-100 rounded-full px-8 py-3 text-sm" id="comment_Message" role="textbox" contenteditable>اضف تعليقا</p>
        </form>
    </div>
    {{--  end add comment form --}}
    <div class="comments"> 
        {{--  start comment card --}}
        <div class="comment-card  text-white my-4"> 
          <div class="comment-info flex h-full"> 
            <div class="comment-user w-1/6 flex flex-col justify-center items-center"> <img class="w-11 rounded-full" src="./img/man2.png" alt="profile" srcset=""/>
              <p class="text-xs text-gray-300">oughris walid</p>
            </div>
            <div class="comment-message bg-darkBlue-dark rounded-md w-5/6 p-3"> 
              <p class="comment-date text-gray-500 mb-1"> 
                <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg><span class="px-2 text-xs ">الان</span>
              </p>
              <p class="message text-sm my-auto"> أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
            </div>
          </div>
        </div>
        {{--  end comment card --}}
    </div>
  </div>

@endsection