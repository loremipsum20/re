function searchMovie() {
    // Menghilangkan semua movie list setiap search di pencet
    $('#movie-list').html('');
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '3c7d1519',
            's': $('#search-input').val()
        },

        success: function (result) {
            if (result.Response == "True") {
                let movies = result.Search;

                // Menampilkan semua film hasil pencarian
                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="${data.Poster}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">${data.Title}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">${data.Year}</h6>
                                <a href="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="${data.imdbID}">See Detail</a>
                                </div>
                            </div>
                        </div>
                    `);
                });
                // data-id pada see detail untuk mencari movie dengan id, sehingga data yang dikembalikan lebih lengkap

                // Menghapus tulisan pada text box setiap selesai mencari
                $('#search-input').val('');


            } else {
                // Cara untuk mendapatkan error dari jquery :
                $('#movie-list').html(`
                <div class="col">
                <h1 class="text-center">` + result.Error + `</h1>
                </div>
                `);
                // $('#movie-list').html('<h1 class="text-center">Movie not found!</h1>');
            }
        }
    });
}

$('#search-button').on('click', function () {
    searchMovie();
});

// e cuma parameter, jadi terserah
$('#search-input').on('keyup', function (e) {
    // keyCode untuk enter adalah 13 pada javascript. Untuk lebih jelasnya, kunjungi keycode.inof
    if (e.keyCode == 13) {
        searchMovie();
    };
});
$('#movie-list').on('click', '.see-detail', function () {

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '3c7d1519',
            'i': $(this).data('id'),
        },

        success: function (movie) {
            if (movie.Response === 'True') {
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="` + movie.Poster + `" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h3>
                                        ` + movie.Title + `</h3>
                                    </li>
                                    <li class="list-group-item">Released : 
                                        ` + movie.Released + `
                                    </li>
                                    <li class="list-group-item">Genre :
                                        ` + movie.Genre + `
                                    </li>
                                    <li class="list-group-item">Director :
                                        ` + movie.Director + `
                                    </li>
                                    <li class="list-group-item">Actors :
                                        ` + movie.Actors + `
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `);
            }
        }
    });

});
// Script dibawah ini gagal mendapatkan id, sebab pada jika dilihat script diatasnya pada looping menampilkan film hasil pencarian, tombol see-detail masih baru dibuat. Sehingga $('.see-detail') tidak ditemukan

// $('.see-detail').on('click', function () {
//     console.log($(this).data('id'));
// });