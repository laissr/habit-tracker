<x-layout>

    <main class="py-10">

    <h1>Faça login</h1>

    <section>

    </section class="mt-4">
        <form action="/login" method="POST">
            @csrf

            <input type="email" name="email" placeholder="your@email.com" class="bg-white p-2 border-2">
            <input type="password" name="password" placeholder="*******" class="bg-white p-2 border-2">

            <button type="submit" class="bg-white border-2 p-2">
                Entrar
            </button>
        </form>

        <div>
            @error('email')
        </div>
    </main>

</x-layout>