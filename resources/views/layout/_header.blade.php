<header class="h-16"> 
    <nav class="flex items-center px-9"> 
      <ul class="flex order-2 w-2/12   h-16  justify-end text-white items-center"> 
        {{-- notofications --}}
        <li class=" list-none p-4 cursor-pointer">
          <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
          </svg>
        </li>
        {{-- messages --}}
        <li class=" list-none p-4 cursor-pointer">
          <svg class="w-5 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </li>
        <li class="mx-2 list-none">
          {{-- user profile image --}}
          <div class="profile w-10 h-10"><img src="{{asset('storage/images/users_profiles_images/profileImg.png')}}"></div>
        </li>
      </ul>
      <form class="w-10/12 relative" action="#" method="post">
        {{-- book recherch form image --}}
        <svg class="w-6 text-white absolute right-4 top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <input class="w-full rounded-md  px-16 py-2 text-white bg-darkBlue-secondary placeholder-white" type="text" name="search" placeholder="ابحت عن كتابك المفضل">
      </form>
    </nav>
  </header>