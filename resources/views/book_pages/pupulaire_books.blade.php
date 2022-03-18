@php
    use Carbon\Carbon;
    Carbon::setLocale(app()->getLocale());
@endphp
@extends('layout.template')

@section('title','pupulaire books')

@section('content')

    <div class="container" data-page="mostReades"> 
        <div class="flex flex-wrap">
            {{--  start pubulaire books card  --}}
            @foreach($pupulaire_books as $book)
            <div class="card-book relative">
                <div class="card-body hover:bg-darkBlue-secondary">
                  <div class="card-image"> <img class="w-full h-full" src="{{asset($book->cover_img)}}"/></div>
                  <div class="card-content h-full"> 
                    <h5 class="card-title">{{$book->title}}</h5>
                    <div class="book-rating"> 
                      <form class="rating flex justify-end" action="">
                        <input class="hidden" type="radio" id="star5" name="rating" value="5"/>
                        <label class="pointer-events-none" for="star5" title="Awesome">
                          <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                          </svg>
                        </label>
                        <input class="hidden " readonly="readonly" checked="checked" type="radio" id="star4" name="rating" value="4"/>
                        <label class="pointer-events-none" for="star4" title="Awesome">
                          <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                          </svg>
                        </label>
                        <input class="hidden" type="radio" id="star3" name="rating" value="3"/>
                        <label class="pointer-events-none" for="star3" title="Awesome">
                          <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                          </svg>
                        </label>
                        <input class="hidden" type="radio" id="star2" name="rating" value="2"/>
                        <label class="pointer-events-none" for="star2" title="Awesome">
                          <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                          </svg>
                        </label>
                        <input class="hidden" type="radio" id="star1" name="rating" value="1"/>
                        <label class="pointer-events-none" for="star1" title="Awesome">
                          <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                          </svg>
                        </label>
                      </form>
                    </div>
                    <div class="card-caption">
                      <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                      </svg><span>{{$book->writer}}</span><span>|</span>
                      <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg><span>{{Carbon::parse($book->publised_date)->translatedFormat('M Y')}}</span>
                    </div>
                    <p class="card-text">{{$book->description}}</p>
                  </div>
                </div><a class="card-link" href="{{route('book.detailes',['id'=>$book->id])}}"></a>
                <div class="favorite-icon favorite-icon-active" title="حدف من المفضلة">
                  <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                  </svg>
                </div>
              </div>
              @endforeach
            {{--  end pubulaire books card  --}}
        </div>
    </div>

@endsection