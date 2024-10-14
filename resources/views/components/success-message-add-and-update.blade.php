<style>
    .success-message-class{
        border: 2px solid #5cb85c;
        background-color: #5cb85c;
        color: white;
        margin: 0;
        padding: 0px 5px;
    }
</style>
@props(['postMessage'])

@if ($postMessage)
    <div id="success-message" class="flex items-center">
        <span>&nbsp;-&nbsp;</span>
        <div {{ $attributes->merge(['class' => 'success-message-class font-medium']) }}>
            {!! $postMessage !!}
        </div>
    </div>
@endif

<script>
    const box = document.getElementById('success-message');
    if(box){
        setTimeout(() => {
            box.classList.add("hidden");
        }, 20000);
    }
</script>
