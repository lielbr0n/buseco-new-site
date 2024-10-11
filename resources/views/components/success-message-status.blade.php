<style>
    .success-message-class{
        border: 2px solid #5cb85c;
        background-color: #5cb85c;
        color: white;
        margin: 15px 0;
        padding: 10px;
    }
</style>
@props(['message'])

@if ($message)
    <div id="success-message" {{ $attributes->merge(['class' => 'success-message-class font-medium']) }}>
        {!! $message !!}
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
