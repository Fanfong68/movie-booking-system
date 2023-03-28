<x-app-layout>
    <link rel="stylesheet" href="css/create_movie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action='/insert_movie' method='POST'>
                        @csrf
                        <table class="submit-table">
                            <tr>
                                <td><label for="movie">Movie Name:</label></td>
                                <td><input type="text" id="movie" name="movie"></td>
                            </tr>
                            <tr>
                                <td><label for="genre">Movie Genre:</label></td>
                                <td><input type="text" id="genre" name="genre"></td>
                            </tr>
                            <tr>
                                <td><label for="duration">Movie Duration:</label></td>
                                <td><input type="text" id="duration" name="duration"></td>
                            </tr>
                            <tr>
                                <td><label for="lang">Movie Language:</label></td>
                                <td><input type="text" id="lang" name="lang"></td>
                            </tr>
                            <tr>
                                <td><label for="desc">Movie Description:</label></td>
                                <td><input type="text" id="desc" name="desc"></td>
                            </tr>
                            <tr>
                                <td><label for="poster">Movie Poster:</label></td>
                                <td><input type="file" id="poster" name="poster" ></td>
                            </tr>
                        </table>  
                     
                        <button type="button" class="create-btn">Create New Movie</button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>