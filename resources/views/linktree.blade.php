<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/5026221195.css') }}">
        <title>
            @Ankayu.id | Linktree
        </title>
        <body>

            <h1>
                Nama: {{ $nama }} -
                Alamat: {{ $alamat }} -
                Umur: {{ $umur }}
            </h1>

            <div class="jarak">

            </div>
            <div class="logo">
                <img src="{{ asset('gambar/logo ankayu.jpg') }}" width="100" class="radius">
            </div>
            <h3 style="
            color: black;
            text-align: center;
            text-decoration: solid;"
            > @ankayu.id </h3>

            <div class="jarak1">
            <a href="https://api.whatsapp.com/send/?phone=6281259620997&text&type=phone_number&app_absent=0"
            class="bcolor">Whatsapp</a>

            <a href="https://shopee.co.id/ankayu.id"
            class="bcolor">Shopee</a>

            <a href="https://www.instagram.com/rafiefchalvani/"
            class="bcolor">Instagram</a>

            <a href="https://www.tiktok.com/@mr.rightnow01"
            class="bcolor">Tiktok</a>

            <a href="https://www.google.com/search?client=mobilesearchapp&sca_esv=564145755&bih=797&biw=390&channel=iss&cs=1&hl=en&rlz=1MDAPLA_enID1015ID1016&source=sh/x/kp/local/m1/5&v=278.0.557984068&sxsrf=AB5stBhQ_6-DSaSxpdtFiPcWvEpGHZ6cxg:1694347259023&q=Departemen+Sistem+Informasi+Fakultas+Teknologi+Elektro+dan+Informatika+Cerdas+Institut+Teknologi+Sepuluh+Nopember&ludocid=9502410386968605378&gsas=1&lsig=AB86z5WdUjHALvUIk9c9h-HXljqn&kgs=c2eac123599f0df6&shndl=-1&shem=lbse,lsp"
            class="bcolor">Location</a>
            </div>

        </div>
        <div class="logo">
            <img src="{{ asset('gambar/logo linktree.jpg') }}" width="100px">
        </div>
        </body>
    </head>
</html>
