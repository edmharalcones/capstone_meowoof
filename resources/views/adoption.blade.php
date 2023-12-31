<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adoption') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Pets") }}

                </div>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Cover</th>
                            <th>Link</th>
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

                            $sql = "SELECT * FROM pets";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                    <td>' . $row["id"] . '</td>
                                        <td>';
                
                                $petPath = $row['pet'];
                                    if (file_exists($petPath)) {
                                        echo '<img src="' . $petPath . '" width="50" height="50" alt="photo"/>';
                                    } else {
                                        echo 'Image not found: ' . $petPath;
                                        }
                                
                                echo '</td>';
                                echo'<td>';
                                $coverPath = $row['cover'];
                                if (file_exists($coverPath)) {
                                    echo '<img src="' . $coverPath . '" width="50" height="50" alt="photo"/>';
                                } else {
                                    echo 'Image not found: ' . $coverPath;
                                    }
                                echo '</td>';
                                
                                echo '<td>' . $row["link"] . '</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">
                                        <a href="' . route('delete', ['id' => $row['id']]) . '" class="text-light">Delete</a>
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
                        {{ __("Add a Pet") }}
                        
                        <br/>
                        <br/>
                        <br/>
                        <form action="{{ route('adoption.post') }}" method="POST" enctype="multipart/form-data">
                                   {!! csrf_field() !!}
                            <label class="form-label" for="pet">Upload Photo:</label>
                            <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="pet" name="pet" required/>
                            </div>
                            <br/>
    
                                <label class="form-label" for="cover">Upload Cover:</label>
                            <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="cover" name="cover" required/>
                            </div>
                            <br/>
                            
                            
                            <div class="input-group mb-3">
                                    <textarea type="text" class="form-control" rows="3" placeholder="Provide album link" name="link" id="link"required></textarea>
                            </div>
                            <br/>
                                <div class="container px-4">
                                    <div class="flex justify-start mt-4">
                                        <x-primary-button>
                                            {{ __('Save') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                                <br/>
                             
                        </form>
        </div>
    
</x-app-layout>
