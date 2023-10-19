<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reviews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Reviews") }}

                </div>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Review</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $servername = "localhost";
                            $username = "u548574294_root";
                            $password = "AAaa!!8520";
                            $database = "u548574294_laravel";
                            $connection = new mysqli($servername, $username, $password, $database);

                            if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                            }

                            $sql = "SELECT * FROM reviews";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                    <td>' . $row["id"] . '</td>
                                        <td>';
                
                                $photoPath = $row['photo'];
                                    if (file_exists($photoPath)) {
                                        echo '<img src="' . $photoPath . '" width="50" height="50" alt="photo"/>';
                                    } else {
                                        echo 'Image not found: ' . $photoPath;
                                        }
                
                                echo '</td>
                                    <td>' . $row["name"] . '</td>
                                    <td>' . $row["review"] . '</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">
                                        <a href="' . route('dashboard.edit', ['id' => $row['id']]) . '" class="text-light">Delete</a>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">
                                        <a href="' . route('dashboard.delete', ['id' => $row['id']]) . '" class="text-light">Delete</a>
                                        </button>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>

                </div>
            </div>
        </div>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Add a Review") }}
                        
                    <br>
                    <br>
                    <br>
                        <form  method="POST" enctype="multipart/form-data" action="{{ isset($item) ? route('dashboard.edit', $item->id) : route('dashboard.post') }}">
                                   {!! csrf_field() !!}
                            <label class="form-label" for="photo">Upload Photo:</label>
                            <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="photo" name="photo" value="{{ isset($item) ? $item->photo : '' }}" required/>
                            </div>
                                <br>
    
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="name">Name</span>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="{{ isset($item) ? $item->name : '' }}"required/>
                            </div>
                                <br>
                            
                            <div class="input-group mb-3">
                                    <textarea type="text" class="form-control" rows="3" placeholder="Review" name="review" id="review" value="{{ isset($item) ? $item->review : '' }}"required></textarea>
                            </div>
                                <br>
                                <div class="container px-4">
                                    <div class="flex justify-start mt-4">
                                        <x-primary-button>
                                            {{ __('Save') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                                <br>
                             
                        </form>
        </div>
    
</x-app-layout>
