@extends('admin.layouts.header')
@section('title','home slides')
@section('content')
<div class="w-full md:flex h-auto">
  {{-- side bar --}}
  @include('admin.layouts.side')
  <div class="flex-1 main">
    <!-- Main content -->
    <div class="w-full flex flex-col">
      <div class="flex flex-col px-6">
        <div class="w-full flex justify-between items-center mt-4">
          <p class="text-secodary">Admin</p>
          <div class="md:flex items-center gap-2 text-secodary hidden">
            <p>Log Out</p>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="w-full border-b-2 border-b-bg mt-8"></div>
      </div>
    </div>
    {{-- starting the main content --}}
   <section class=" flex flex-col gap-4 py-5 px-8">
    <div class=" w-full">
        <p> Accueil / Gestionnaire des slides</p>
    </div>
    <div class=" flex flex-col gap-6 w-full">
        <h1 class=" text-2xl">
            GESTIONNAIRE DES SLIDES
        </h1>
        <p class=" rounded-md px-4 py-1 cursor-pointer bg-secodary text-white text-lg w-[7rem]">
            <a href="#" class=" w-full text-base">
                Ajouter slide
            </a>
        </p>
    </div>
   </section>
   <section class=" flex flex-col gap-4 px-8 w-full ">
        <div class=" w-full flex justify-between items-center bg-[#fff] py-4 px-4 rounded-sm">
            <label for="pagination" class=" flex gap-3 items-center text-base">
                <select name="pagination" id="pagination" class=" w-[5rem] border-[0.3px] border-secodary rounded-[4px] bg-[transparent] py-1">
                    <option value="5" class=" text-center text-base">5</option>
                    <option value="10" class=" text-center text-base bg-secodary text-white" >10</option>
                    <option value="20" class=" text-center text-base " >20</option>
                    <option value="all" class=" text-center text-base bg-secodary text-white" >Tout</option>
                </select>
                résultats par page
            </label>
            <label for="search" class=" flex gap-3 items-center text-base">
                Rechercher : 
                <input type="text" name="search" id="search" class="text-base duration-300 ease-in-out focus:border-accent1 outline-none border-[0.3px] border-secodary text-bg px-4 py-1 rounded-[4px] bg-[transparent]">
            </label>
        </div>
   </section>
   <section class=" w-full px-8 flex flex-col">
        <table class=" dash-border rounded-[4px]">
            <thead class=" border-b  dash-border">
                <tr class="">
                    <th class=" w-16 py-2 h-auto border-r dash-border">ID</th>
                    <th class=" w-[10rem] border-r dash-border">image</th>
                    <th class="w-[35rem] border-r dash-border">Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="h-[2rem]">
                    <td class="w-10  border-r dash-border h-[4rem] text-center"> ID 3 </td>
                    <td class="w-[10rem] border-r dash-border  py-2 h-[50px] px-4"> 
                        <img src="{{asset('images/8.JPG')}}" alt="" width="80" height="50" class="
                        w-[65%] h-[50px] object-cover img rounded-md">
                    </td>
                    <td class="w-[35rem] border-r dash-border text-center "> titre 3 </td>
                    <td class="dash-border px-2">
                        <div class=" flex gap-3 w-full justify-center items-center">
                            <a href="#" class=" border border-bg rounded-md flex justify-center items-center px-2 py-1 gap-1 text-base text-bg">
                                <i class="fa-solid fa-pen"></i>
                                Editer
                             </a>
                             <form action="" class=" flex items-center">
                                <button type="submit" class=" rounded-md text-base gap-1 text-white bg-red flex justify-center items-center px-2 py-1">
                                    <i class=" fa-solid fa-trash text-base "></i>
                                    Supprimer
                                </button>
                             </form>
                        </div>
                   </td>
                </tr>
                <tr class="h-[2rem]">
                    <td class="w-10  border-r dash-border h-[4rem] text-center"> ID 3 </td>
                    <td class="w-[10rem] border-r dash-border  py-2 h-[50px] px-4"> 
                        <img src="{{asset('images/8.JPG')}}" alt="" width="80" height="50" class="
                        w-[65%] h-[50px] object-cover img rounded-md">
                    </td>
                    <td class="w-[35rem] border-r dash-border text-center "> titre 3 </td>
                    <td class="dash-border px-2">
                        <div class=" flex gap-3 w-full justify-center items-center">
                            <a href="#" class=" border border-bg rounded-md flex justify-center items-center px-2 py-1 gap-1 text-base text-bg">
                                <i class="fa-solid fa-pen"></i>
                                Editer
                             </a>
                             <form action="" class=" flex items-center">
                                <button type="submit" class=" rounded-md text-base gap-1 text-white bg-red flex justify-center items-center px-2 py-1">
                                    <i class=" fa-solid fa-trash text-base "></i>
                                    Supprimer
                                </button>
                             </form>
                        </div>
                   </td>
                </tr>
                <tr class="h-[2rem]">
                    <td class="w-10  border-r dash-border h-[4rem] text-center"> ID 3 </td>
                    <td class="w-[10rem] border-r dash-border  py-2 h-[50px] px-4"> 
                        <img src="{{asset('images/8.JPG')}}" alt="" width="80" height="50" class="
                        w-[65%] h-[50px] object-cover img rounded-md">
                    </td>
                    <td class="w-[35rem] border-r dash-border text-center "> titre 3 </td>
                    <td class="dash-border px-2">
                        <div class=" flex gap-3 w-full justify-center items-center">
                            <a href="#" class=" border border-bg rounded-md flex justify-center items-center px-2 py-1 gap-1 text-base text-bg">
                                <i class="fa-solid fa-pen"></i>
                                Editer
                             </a>
                             <form action="" class=" flex items-center">
                                <button type="submit" class=" rounded-md text-base gap-1 text-white bg-red flex justify-center items-center px-2 py-1">
                                    <i class=" fa-solid fa-trash text-base "></i>
                                    Supprimer
                                </button>
                             </form>
                        </div>
                   </td>
                </tr>
            </tbody>
        </table>
   </section>
   <section class=" w-full px-8">
    <div class=" w-full flex justify-between items-center bg-[#fff] py-4 px-4 rounded-sm">
        <div>
            <p class=" text-bg text-base">
                1 à 4 résultats sur 4
            </p>
        </div>
        <div class=" flex">
            <button class=" px-4 py-1 text-sm text-accent1 rounded-tl-[4px] rounded-bl-[4px] border border-accent1">
                <a href="#">
                    <
                </a>
            </button>
            <button class=" px-3 py-1 bg-accent1 text-white">
                1
            </button>
            <button  class=" px-4 py-1 text-sm text-accent1 rounded-tr-[4px] rounded-br-[4px] border border-accent1">
                <a href="#">
                    >
                </a>
            </button>
        </div>
    </div>
   </section>
    {{-- ending the main content --}}
  </div>
</div>
@endsection