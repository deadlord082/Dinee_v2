<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@extends('layouts.app')

@section('title', 'Réservations')

@section('content')
  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Restaurant
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Plat commandé
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Statut
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($bookings as $booking)
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">{{ $booking->restaurant_name }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-500">{{ $booking->dishe_name }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
          @if($booking->status === 'Terminés')
            bg-green-100 text-green-800
          @elseif($booking->status === 'En cours')
            bg-blue-100 text-blue-800
          @elseif($booking->status === 'En attente')
            bg-red-100 text-red-800
          @else
            bg-gray-100 text-gray-800
          @endif">
          {{ $booking->status }}
</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <div class="flex space-x-3">
                <a href="#" class="text-blue-600 hover:text-blue-900">
                  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><title>
                      eye_line</title>
                    <g id="eye_line" fill='none'>
                      <path
                        d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z'/>
                      <path fill='#09244BFF'
                            d='M12 4c2.787 0 5.263 1.257 7.026 2.813.885.781 1.614 1.658 2.128 2.531.505.857.846 1.786.846 2.656 0 .87-.34 1.799-.846 2.656-.514.873-1.243 1.75-2.128 2.531C17.263 18.743 14.786 20 12 20c-2.787 0-5.263-1.257-7.026-2.813-.885-.781-1.614-1.658-2.128-2.531C2.34 13.799 2 12.87 2 12c0-.87.34-1.799.846-2.656.514-.873 1.243-1.75 2.128-2.531C6.737 5.257 9.214 4 12 4m0 2c-2.184 0-4.208.993-5.702 2.312-.744.656-1.332 1.373-1.729 2.047C4.163 11.049 4 11.62 4 12c0 .38.163.951.569 1.641.397.674.985 1.39 1.729 2.047C7.792 17.007 9.816 18 12 18s4.208-.993 5.702-2.312c.744-.657 1.332-1.373 1.729-2.047.406-.69.569-1.261.569-1.641 0-.38-.163-.951-.569-1.641-.397-.674-.985-1.39-1.729-2.047C16.208 6.993 14.184 6 12 6m0 3c.088 0 .175.004.261.011a2 2 0 0 0 2.728 2.728A3 3 0 1 1 12 9'/>
                    </g>
                  </svg>
                </a>
                <a href="#" class="text-yellow-500 hover:text-yellow-700">
                  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><title>
                      pencil_line</title>
                    <g id="pencil_line" fill='none'>
                      <path
                        d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z'/>
                      <path fill='#09244BFF'
                            d='M16.035 3.015a3 3 0 0 1 4.099-.135l.144.135.707.707a3 3 0 0 1 .135 4.098l-.135.144L9.773 19.177a1.5 1.5 0 0 1-.562.354l-.162.047-4.454 1.028a1.001 1.001 0 0 1-1.22-1.088l.02-.113 1.027-4.455a1.5 1.5 0 0 1 .29-.598l.111-.125zm-.707 3.535-8.99 8.99-.636 2.758 2.758-.637 8.99-8.99-2.122-2.12Zm3.536-2.121a1 1 0 0 0-1.32-.083l-.094.083-.708.707 2.122 2.121.707-.707a1 1 0 0 0 .083-1.32l-.083-.094z'/>
                    </g>
                  </svg>
                </a>
                <a href="#" class="text-red-600 hover:text-red-900">
                  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><title>
                      delete_2_line</title>
                    <g id="delete_2_line" fill='none'>
                      <path
                        d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z'/>
                      <path fill='#09244BFF'
                            d='M14.28 2a2 2 0 0 1 1.897 1.368L16.72 5H20a1 1 0 1 1 0 2l-.003.071-.867 12.143A3 3 0 0 1 16.138 22H7.862a3 3 0 0 1-2.992-2.786L4.003 7.07A1.01 1.01 0 0 1 4 7a1 1 0 0 1 0-2h3.28l.543-1.632A2 2 0 0 1 9.721 2zm3.717 5H6.003l.862 12.071a1 1 0 0 0 .997.929h8.276a1 1 0 0 0 .997-.929zM10 10a1 1 0 0 1 .993.883L11 11v5a1 1 0 0 1-1.993.117L9 16v-5a1 1 0 0 1 1-1m4 0a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1m.28-6H9.72l-.333 1h5.226z'/>
                    </g>
                  </svg>
                </a>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
</body>
</html>
