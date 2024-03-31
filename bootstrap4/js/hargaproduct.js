let endpoint = 'https://reqres.in/api/users'

let konten = document.getElementById('konten')

fetch(endpoint)
    .then((res) => res.json())
    .then((response) => {

        // console.log(response);

        response.data.forEach(element => {
            konten.innerHTML = `
            <main class = "grid">
            <article>
                <img src="img/foto_1.png" width="300px" height="300px"> 
                <div class = "konten">
                    <h2>Nama Produk : "BlueBloom Delight"</h2>
                    <h3>Harga : "Rp. 15.000"</h3>
                    <p>Minuman dengan campuran air lemon dan pudding yang terbuat dari bunga telang di bagian bawahnya</p>
                </div>
            </article>
            <article>
                <img src="img/foto_2.jpg" width="300px" height="300px">
                <div class = "konten">
                    <h2>Nama Produk : "Lemonade"</h2>
                    <h3>Harga : "Rp. 11.000"</h3>
                    <p>Minuman segar air lemon yang dapat menghilangkan rasa haus anda</p>
                </div>
            </article>
            <article>
                <img src="img/foto_3.jpg" width="300px" height="300px">
                <div class = "konten">
                    <h2>Nama Produk : "Pudding Bunga Telang"</h2>
                    <h3>Harga : "Rp. 10.000"</h3>
                    <p>Pudding dengan tekstur lembut yang bikin anda merasakan hal berbeda saat memakannya</p>
                </div>
            </article>
            <article>
                <img src="img/foto_4.jpg" width="300px" height="300px">
                <div class = "konten">
                    <h2>Nama Produk : "Bunga Telang Kering"</h2>
                    <h3>Harga : "Rp. 13.000"</h3>
                    <p>Kami juga menjual bunga telang kering yang bisa anda seduh sendiri dirumah, dan bisa anda jadikan campuran lainnya</p>
                </div>
            </article>
            <article>
                <img src="img/foto_5.jpg" width="300px" height="300px">
                <div class = "konten">
                    <h2>Nama Produk : "Telang+Lemon"</h2>
                    <h3>Harga : "Rp. 14.000"</h3>
                    <p>Minuman unik dengan perpaduan perasan lemon dan bunga telang yang cantik</p>
                </div>
            </article>
        </main>
            `
            console.log(element);
        });

    })