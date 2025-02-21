<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
        <h2 class="text-4xl font-bold text-center text-purple-700 mb-6">Ajouter un Article</h2>

        @if(session('success'))
            <p class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</p>
        @endif

        <form action="/create" method="POST">
            @csrf

            <div class="mb-5">
                <label for="titre" class="block text-purple-600 font-semibold mb-2">Titre :</label>
                <input type="text" id="titre" name="titre" required
                    class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 outline-none transition duration-200">
                @error('titre')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description" class="block text-purple-600 font-semibold mb-2">Description :</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 outline-none transition duration-200"></textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="photoUrl" class="block text-purple-600 font-semibold mb-2">Photo (URL) :</label>
                <input type="url" id="photoUrl" name="photoUrl" placeholder="Collez un lien d'image ici"
                    class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 outline-none transition duration-200">
                @error('photoUrl')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="categorie" class="block text-purple-600 font-semibold mb-2">Catégorie :</label>
                <select id="categorie" name="categorie" required
                    class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 outline-none transition duration-200">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="glaces">Glaces</option>
                    <option value="pâtisseries">Pâtisseries</option>
                    <option value="fruits_frais">Fruits frais</option>
                    <option value="crèmes">Crèmes</option>
                    <option value="tarte">Tarte</option>
                    <option value="mousse">Mousse</option>
                    <option value="biscuits">Biscuits</option>
                  <option value="boissons">Boissons</option>

                </select>
                @error('categorie')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-lg transition duration-300">
                Ajouter
            </button>
        </form>
    </div>

</body>
</html>
