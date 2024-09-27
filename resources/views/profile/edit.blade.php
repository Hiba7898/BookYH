<x-app-layout>
    <x-slot name="header" >
        <center>
        <h2 style="font-size: 1.8rem;" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>  
        <img  src="{{asset('images\116395943260tji5ordfujy44njydzhlidv8reqpmtun7ggx1oszpz1dcistzxnmag7do6vxkjxphlsgueuurkg9pkpbwgorvv9lratpxm38rp5.png')}}" width="50px" height="50px">
        </center>
       
    </x-slot>

    <div style="background-color: rgb(133, 36, 223)" class="py-12">
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div   class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div style="background-color: rgb(171, 120, 219) ; width:727px ;border-radius: .5rem;  border-style: solid;
                border-color:rgb(133, 36, 223); "  >
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div style="background-color: rgb(171, 120, 219) ; width:727px ;border-radius: .5rem; " >
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div style="background-color: rgb(171, 120, 219) ; width:727px ;border-radius: .5rem; " >
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
