@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold">Exam Routine</h1>
            <a href="{{route('results.create')}}" class="inline-block p-2 rounded-md bg-green-500 text-white">Create</a>
        </div>
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-4 border-b border-gray-200 shadow">
                    <!-- <table> -->
                    <table id="dataTable" class="p-4 w-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="p-8 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                                Course Code
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                                Course Name
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                                Time
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @forelse($results as $result)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{$result->id}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        {{$result->course_code}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">{{$result->course_name}}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{$result->time}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="{{route('results.show',['result' => $result->id])}}"
                                       class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="{{route('results.destroy',['result' => $result])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you sure?')" type="submit"
                                                class="px-4 py-1 text-sm text-white bg-red-400 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Empty!</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
