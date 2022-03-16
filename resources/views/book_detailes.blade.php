@php
    use Carbon\Carbon;
    Carbon::setLocale(app()->getLocale());
@endphp
@extends('layout.template')

@section('title','book detailes')

@section('content')

    {{--  include the book navbar  --}}
    @include('layout._books_navbar')
    <div class="details p-2 flex flex-nowrap"> 
        <div class="details-img w-36 mx-3">{{-- book cover image --}}<img class="w-full h-full" src="{{asset($book->cover_img)}}" alt="" srcset=""></div>
        <div class="details-content mx-4 py-2 h-full my-auto flex-col text-white"> 
          <h4 class="text-1xl font-bold my-2">{{$book->title}}</h4>
          <div class="book-rating"> 
            {{--  start book rating  --}}
            <form class="rating flex justify-end" action="">
              <input class="hidden" type="radio" id="bookStar5" name="rating" value="5"/>
              <label class="pointer-events-none" for="bookStar5" title="Awesome">
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </label>
              <input class="hidden" type="radio" id="bookStar4" name="rating" value="4"/>
              <label class="pointer-events-none" for="bookStar4" title="Awesome">
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </label>
              <input class="hidden " readonly="readonly" checked="checked" type="radio" id="bookStar3" name="rating" value="3"/>
              <label class="pointer-events-none" for="bookStar3" title="Awesome">
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </label>
              <input class="hidden" type="radio" id="bookStar2" name="rating" value="2"/>
              <label class="pointer-events-none" for="bookStar2" title="Awesome">
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </label>
              <input class="hidden" type="radio" id="bookStar1" name="rating" value="1"/>
              <label class="pointer-events-none" for="bookStar1" title="Awesome">
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </label>
            </form>
            {{--  end book rating  --}}
          </div>
          {{--  start book information  --}}
          <div class="details-auth text-sm my-2 font-semibold text-gray-200">
            <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg><span class="mx-2">{{$book->writer}}</span>
            <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg><span class="mx-2">{{Carbon::parse($book->publised_date)->translatedFormat('M Y')}}</span>
          </div>
          <div class="details-info text-sm">
            <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg><span class="mx-2">{{$book->type}}</span>
            <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg><span class="mx-2">{{$book->nb_pages}} صفحة</span>
          </div>
          <div class="details-langage text-sm my-2">
            <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
            </svg><span class="mx-2">{{$book->language}}</span>
          </div>
        </div>
      </div>
      {{--  end book information  --}}
      {{-- start add to list forme  --}}
      <div class="book-list-links my-3 text-white font-semibold"> <a class="rounded-full  text-xs  mx-2 py-2 px-4 border border-white  hover:bg-gray-50 hover:text-black" href="#">اضف الى ارغب في قرائتها الان</a><a class="rounded-full text-xs  mx-2 py-2 px-4 border border-white  hover:bg-gray-50 hover:text-black" href="#">اضف الى ارغب في قرائتها</a><a class="rounded-full text-xs  mx-2 py-2 px-4 border border-white  hover:bg-gray-50 hover:text-black" href="#">اضف الى تمت قرائتها</a></div>
        {{-- end add to list forme  --}}
           <div class="book-rating my-3 flex">
              <h4 class="text-gray-400  my-auto font-extrabold text-lg "> اضافة تقييم</h4>
              {{-- start add book rating  --}}
              <div class="user-rating mx-6 text-gray-300">
                <form class="rating flex justify-end" action="">
                  <input class="hidden" type="radio" id="userStar5" name="rating" value="5"/>
                  <label class="cursor-pointer" for="userStar5" title="Awesome">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                  </label>
                  <input class="hidden" type="radio" id="userStar4" name="rating" value="4"/>
                  <label class="cursor-pointer" for="userStar4" title="Awesome">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                  </label>
                  <input class="hidden" type="radio" id="userStar3" name="rating" value="3"/>
                  <label class="cursor-pointer" for="userStar3" title="Awesome">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                  </label>
                  <input class="hidden" type="radio" id="userStar2" name="rating" value="2"/>
                  <label class="cursor-pointer" for="userStar2" title="Awesome">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                  </label>
                  <input class="hidden" type="radio" id="userStar1" name="rating" value="1"/>
                  <label class="cursor-pointer" for="userStar1" title="Awesome">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                  </label>
                </form>
              </div>
            </div>
            {{-- end add book rating  --}}
            {{-- start book description --}}
            <div class="book-description mt-8"> 
                <div class="description p-5 rounded-2xl text-white bg-darkBlue-dark"> 
                  <p class="mb-4 text-sm">{{$book->description}}</p>
                  {{-- book type listes --}}
                  <div class="book-categories flex flex-wrap"> <a class="rounded-full text-xs  mx-1 py-2 px-4 bg-darkBlue-secondary" href="#">خيال علمي</a><a class="rounded-full text-xs  mx-1 py-2 px-4 bg-darkBlue-secondary" href="#">اكشن</a><a class="rounded-full text-xs  mx-1 py-2 px-4 bg-darkBlue-secondary" href="#">دراما</a><a class="rounded-full text-xs  mx-1 py-2 px-4 bg-darkBlue-secondary" href="#">نفسي</a><a class="rounded-full text-xs  mx-1 py-2 px-4 bg-darkBlue-secondary" href="#">شريحة من الحياة</a>
                  </div>
                </div>
            </div>
            {{-- end book description --}}
            {{-- start dawlonds links --}}
            <div class="dawnolds-links"> 
                <h4 class="text-gray-400  my-3 font-extrabold text-lg "> روابط التحميل</h4>
                <table class="w-full h-full text-white  bg-darkBlue-dark"> 
                  <thead class="text-right bg-darkBlue-secondary"> 
                    <td class="p-4 w-1/3">اسم السيرفر</td>
                    <td class="p-4 w-1/3">الحجم</td>
                    <td class="p-4 w-1/3">الرابط</td>
                  </thead>
                  <tbody> 
                    <tr class="group text-gray-200 hover:text-white">
                      <td class="p-4 w-1/3">google drive </td>
                      <td class="p-4 w-1/3">12 mb </td>
                      <td class="p-4 w-1/3"><a class="rounded-full text-base mx-1 py-2 pl-14 pr-11 border-2 border-darkBlue-secondary hover:bg-darkBlue-secondary" href="#">
                          <svg class="w-4 mx-1 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                          </svg><span>تنزيل</span></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              {{--  end dawlonds links --}}

@endsection