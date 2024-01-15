<style>
    .notif {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        padding: 12px;
        display: flex;
        z-index: 9999999;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        border-radius: 8px;
        box-shadow: 0px 0px 5px -3px #111;
        width: 50%;
        max-width: 500px;
    }

    #notif_fail {
        background: rgb(255, 150, 150);
    }

    #notif_success {
        background: rgb(226, 255, 147);
    }

    .fail_text {
        font-weight: 500;
        font-size: 14px;
        color: #700b2e;
    }

    .success_text {
        font-weight: 500;
        font-size: 14px;
        color: #386f09;
    }

    .iconsizefail {
        color: #eb3b3b;
        padding-inline: 10px;
        transform: scale(1.2);
    }

    .iconsizesuccess {
        color: #a2e831;
        padding-inline: 10px;
        transform: scale(1.2);
    }
</style>

@if (Session::has('fail'))
<div id="notif_fail" class="notif">
    <div>
        <i class="iconsizefail fa-solid fa-circle-exclamation"></i>
    </div>
    <div class="fail_text">{{ Session::get('fail') }}</div>
</div>
@elseif (Session::has('success'))
<div id="notif_success" class="notif">
    <div>
        <i class="iconsizesuccess fa-solid fa-circle-check"></i>
    </div>
    <div class="success_text">{{ Session::get('success') }}</div>
</div>
@endif

@foreach ($errors->all() as $error)
<div id="notif_fail" class="notif">
    <div>
        <i class="iconsizefail fa-solid fa-circle-exclamation"></i>
    </div>
    <div class="fail_text">{{ $error }}</div>
</div>
@endforeach