<style>
    .success-message-class{
        border: 2px solid #cb2d2b;
        background-color: #cb2d2b;
        color: white;
        margin: 0;
        padding: 0px 5px;
    }
</style>
@props(['postMessage'])

@if ($postMessage)
    <div id="delete-message" class="flex items-center">
        <span>&nbsp;-&nbsp;</span>
        <div {{ $attributes->merge(['class' => 'success-message-class font-medium']) }}>
            {!! $postMessage !!}
        </div>
    </div>
@endif

<script>
    const box = document.getElementById('delete-message');
    if(box){
        setTimeout(() => {
            box.classList.add("hidden");
        }, 20000);
    }
</script>
