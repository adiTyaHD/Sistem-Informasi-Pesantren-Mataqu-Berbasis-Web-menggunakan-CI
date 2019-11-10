<style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        /*  font: inherit; */
        /*  vertical-align: baseline; */
    }

    /* HTML5 display-role reset for older browsers */
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    body {
        line-height: 1;
    }

    ol,
    ul {
        list-style: none;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    * {
        /*   border: solid 1px #999; */
        margin: 0px;
        padding: 0px;
        vertical-align: middle;
        font-family: "lato";
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
    }

    .myprofile {
        height: 65%;
        width: 45%;
        vertical-align: top;
        margin-top: 5%;
        margin-right: 25%;
        margin-left: 25%;
        margin-bottom: 20%;
        position: relative;
        box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2), 2px 10px 30px 0 rgba(0, 0, 0, 0.2);
        font-size: 14px;
        color: #666;
    }

    .myprofile .icon {
        display: inline-block;
        width: 1.8em;
        height: 1.8em;
        stroke-width: 0;
    }

    .myprofile .header,
    .myprofile .personal,
    .myprofile .business {
        padding: 10px 30px;
    }

    .myprofile .header {
        height: 150px;
        background: linear-gradient(#00BCD3, #13A2CA)
    }

    .myprofile .button {
        position: absolute;
        top: 5px;
        right: 20px;
    }

    .myprofile .button a {
        margin-left: 10px;
    }

    .myprofile a.close {
        font-size: 32px;
        color: #ffffff;
        text-decoration: none;
    }

    .myprofile .personal svg,
    .myprofile .business svg {
        margin-right: 10px;
    }

    .myprofile svg.icon.icon-edit-profile {
        width: 1.5em;
        height: 1.5em;
        color: #fff;
    }

    .myprofile h1 {
        display: inline-block;
        font-size: 22px;
        color: white;
        margin: 0;
        padding-top: 5px;
    }

    .myprofile .info {
        margin-left: 20px;
        margin-top: 20px;
    }

    .myprofile .info div {
        display: inline-block;
        margin-left: 20px;
        color: #fff;
    }

    .myprofile .icon.icon-user {
        display: inline-block;
        border-radius: 50px;
        width: 4.5em;
        height: 4.5em;
        fill: #333;
    }

    .myprofile .name {
        font-weight: bold;
        font-size: 17px;
        line-height: 28px;
    }

    .myprofile .personal {
        background-color: #f4f4f4;
    }

    .myprofile .item {
        height: 40px;
        line-height: 40px;
    }

    .myprofile .item>div {
        float: left;
        width: 50%;
    }

    .myprofile .company {
        display: block;
        margin-top: 10px;
    }

    .myprofile h3.companyname {
        display: inline-block;
        font-size: 15px;
        font-weight: bold;
        color: #00ABD1;
    }

    .myprofile .item02,
    .myprofile .item03 {
        display: inline-block;
        padding: 10px 0;
    }

    .myprofile .item02 {
        width: 50%;
        float: left;
    }

    .myprofile .item02,
    .myprofile .item03 .title {
        line-height: 20px;
        color: #333;
    }

    .myprofile .item02 .details {
        font-size: 13px;
        color: #666;
    }

    .myprofile .item03 {
        width: 100%;
    }

    .myprofile table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 5px;
    }

    .myprofile tr,
    .myprofile td {
        padding-left: 10px;
        height: 28px;
    }

    .myprofile td {
        border-bottom: 1px solid #F2F2F2;
    }

    .myprofile .section td {
        color: #333;
        background-color: #F2F2F2;
    }
</style>
<div class="myprofile">
    <div class="header profile">
        <h1 class="ml-3">My Profile</h1>
        <div class="info">
            <img src="<?= base_url('assets/images/IMG_20190524_213722_193.jpg'); ?>" width="85px" class="mr-5 pr-2" alt="">
            <div class="text-center ml-5">
                <h2 class="name">Aditya Dwi Nugroho</h2>
                <span class="email">adityahd@student.gunadarma.ac.id</span>
            </div>
        </div>
    </div>
    <div class="personal">
        <div class="item">

            <span><i class="fas fa-user-graduate"></i> &nbsp; Sistem Informasi</span>
        </div>
        <img src="<?= base_url('assets/images/kisspng-gunadarma-university-sam-ratulangi-university-univ-hanya-5b25deebead118.8333435715292085559618.png'); ?>" width="174px" class="float-right px-5 pb-5" alt="">

        <div class="item">
            <span><i class="fas fa-university"></i> &nbsp;Universitas Gunadarma</span>
        </div>
        <div class="item">
            <span><i class="fas fa-phone-square"></i> &nbsp;(021) 78881112</span>
        </div>
        <div class="item">
            <span><i class="fas fa-search-location"></i> &nbsp;Indonesia, Jawa Barat</span>
        </div>
    </div>
    <div class="business">
        <div class="company">
            <svg class="icon icon-company">
                <use xlink:href="#icon-company"></use>
            </svg>
            <h3 class="companyname">Contact Me</h3>
        </div>
        <div class=item02>
            <span class="title">Sosial Media</span>
            <p class="details"><i class="fab fa-facebook"></i> &nbsp; Facebook </p>
            <p class="details"><i class="fab fa-whatsapp-square"></i>&nbsp; Whatsapp</p>
            <p class="details"><i class="fab fa-instagram"></i>&nbsp; Instagram</p>
        </div>
        <div class=item02>
            <span class="title">link</span>
            <a href="https://www.facebook.com/Aditya.DN04">
                <p class="details">Click Here</p>
            </a>
            <a href="https://api.whatsapp.com/6285890019191?text=I'm%20Assalamualaikum%20&">
                <p class="details">Click Here</p>
            </a>
            <a href="https://www.instagram.com/_masadit_/">
                <p class="details">Click Here</p>
            </a>
        </div>
        <div class=item03>
            <span class="title">Pendidikan</span>
            <table>
                <tr class="section">
                    <td>Sekolah</td>
                    <td>Tingkat</td>
                    <td>Tahun</td>
                </tr>
                <tr>
                    <td>SMAN 1 BABELAN </td>
                    <td>SMAN</td>
                    <td>2013</td>
                </tr>
                <tr>
                    <td>Universitas Gunadarma </td>
                    <td>Jenjang S1</td>
                    <td>2016-Sekarang</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>

<script defer src="https://i.icomoon.io/public/temp/0ff6c42a3d/cenpiph/svgxuse.js"></script>