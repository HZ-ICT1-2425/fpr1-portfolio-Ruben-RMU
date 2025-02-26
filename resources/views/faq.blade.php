@extends('components.main')

@section('content')
    <details class="qna">
        <summary class="question">How can I print a document from my laptop at HZ?</summary>
        <ol class="answers">
            <li>Go to <a target="_blank" href="https://hz.mynetpay.nl"><span class="marker">this page</span></a>.</li>
            <li>Log in to your school account.</li>
            <li>Upload a file at WebPrint or install the printer at Mobilityprint.</li>
            <p class="note">NOTE: To print you have to have printer credit!</p>
            <p>For more info, go to the <a target="_blank" href="https://hzuniversity.topdesk.net"><span class="marker">helpdesk.</span></a></p>
        </ol>
    </details>
    <details class="qna">
        <summary class="question">How can I order something off of the HZ Webshop?</summary>
        <ol class="answers">
            <li>Go to the <a href="https://webshop.hz.nl" target="_blank"><span class="marker">HZ Webshop</span></a></li>
            <li>Log in.</li>
            <li>Search for the product you want and select the options you want.</li>
            <li>Click on "Add to Shopping Cart".</li>
            <li>Go to "SHOPPING CART" on the top of the page</li>
            <li>Click on "CHECKOUT".</li>
            <li>Choose your payment method.</li>
            <li>Click on "Next" and follow the instructions on your screen.</li>
        </ol>
    </details>
    <details class="qna">
        <summary class="question">How can I scan a document and send it to my laptop?</summary>
        <ol class="answers">
            <li>Go to a scanner or printer.</li>
            <li>Log in.</li>
            <li>Press "Scan".</li>
            <li>Put your papers correctly on the scanner.</li>
            <li class="startli"><img class="start" src="images/pressstart.gif"></li>
            <li>Log out.</li>
        </ol>
        <p class="note">Note: If you want to print double-sided, go to Settings and change the duplex mode to double-sided.</p>
    </details>
    <details class="qna">
        <summary class="question">How can I book a project space?</summary>
        <ol class="answers">
            <li>Go to the <a href="https://hzuniversity.topdesk.net/tas/public/ssp/"><span class="marker">Selfservice Portal</span></a>.</li>
            <li>Go To Reservations > Reserve a Meeting or Project Room.</li>
            <li>Select which room you want to reserve and when.</li>
            <li>Click Next.</li>
            <li>Fill in what you have to.</li>
            <li>Confirm the reservation.</li>
        </ol>
    </details>
    <details class="qna">
        <summary class="question">Where can I park my car?</summary>
        <p class="answers">You can't park your car directly by the school. There is parking available, but only for crippled/disabled people. Instead, you can park your car at the Kousteensedijk parking place, where there are parking places for employees and students, about 8 minutes walking from here. When you show your card, you can drive in.</p>
    </details>
@endsection
