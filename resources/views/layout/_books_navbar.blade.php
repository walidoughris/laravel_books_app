<div class="container" data-page="book">
    <div class="tabs-buttons flex mb-3"> 
      <div class="{{request()->routeIs('book.detailes') ? 'border-b text-white' : 'text-gray-400'}} tab-link w-1/3   hover:text-white text-center"><a class="w-full h-full inline-block py-4" href="{{route('book.detailes',['id'=>$book->id])}}">تفاصيل</a></div>
      <div class="{{--request()->routeIs('book.comments') ? 'border-b text-white' : 'text-gray-400'--}} tab-link w-1/3 text-gray-400   hover:text-white text-center"><a class="w-full h-full inline-block py-4" href="{{--route('book.comments',['id'=>$book->id])--}}">قراءة</a></div>
      <div class="{{request()->routeIs('book.comments') ? 'border-b text-white' : 'text-gray-400'}} tab-link w-1/3 hover:text-white text-center"><a class="w-full h-full inline-block py-4" href="{{route('book.comments',['id'=>$book->id])}}">تعاليق القراء</a></div>
</div>