<div>

    <h1>

    Test ini dashboard ad
    
    </h1>
</div>

<div>
    @auth    
            <form method="POST" action="/logout" class="mr-4">
                @csrf
                @method('DELETE')
                <button class="text-m hover:text-gray-400">Log Out</button>
            </form>
            @endauth
</div>


