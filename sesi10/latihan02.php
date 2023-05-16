<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>
   
    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="jk" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="jurusan">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TI PAR</option>
                <option value="SK">SK</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" id="txhobi" name="musik">Musik
            <input type="checkbox" id="txhobi" name="tari">Tari
            <input type="checkbox" id="txhobi" name="baca">Membaca
            <input type="checkbox" id="txhobi" name="tidur">Tidur
            <input type="checkbox" id="txhobi" name="joging">Joging
            <input type="checkbox" id="txhobi" name="lari">Lari
            <input type="checkbox" id="txhobi" name="healing">Healing
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

    <script>
        function checkform(){
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jk = f.jk.value;
            let jurusan = f.jurusan.value;
            let hobi_musik = f.txhobi[0].checked;
            let hobi_tari = f.txhobi[1].checked;
            let hobi_baca = f.txhobi[2].checked;
            let hobi_tidur = f.txhobi[3].checked;
            let hobi_joging = f.txhobi[4].checked;
            let hobi_lari = f.txhobi[5].checked;
            let hobi_healing = f.txhobi[6].checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("Jenis Kelamin: "+jk);
            console.log("Jurusan: "+jurusan);
            console.log("Hobi Musik: "+hobi_musik);
            console.log("Hobi Tari: "+hobi_tari);
            console.log("Hobi Membaca: "+hobi_baca);
            console.log("Hobi Tidur: "+hobi_tidur);
            console.log("Hobi Joging: "+hobi_joging);
            console.log("Hobi Lari: "+hobi_lari);
            console.log("Hobi Healing: "+hobi_healing);
            return false;
        }
    </script>
</body>
</html>