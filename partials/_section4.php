<div class="text-center">
    <h1 class=" font-bold text-4xl pt-10 underline">Formulaire de Contact</h1>
    <form action="" method="POST" class="grid place-items-center bg-gray-100 mx-2 2xl:mx-96 py-10 my-16 gap-y-4 rounded-xl">
        <!--input prenom/nom  -->
        <div class="flex space-x-16">
            <div class="mb-4">
                <label for="name" class="font-semibold ">Prenom</label>
                <input type="text" name="name" class="input input-bordered w-full max-w-xs block" value="" />
            </div>
            <div class="mb-4">
                <label for="name" class="font-semibold ">Nom</label>
                <input type="text" name="name" class="input input-bordered w-full max-w-xs block" value="" />
            </div>
        </div>

        <!-- input email -->
        <div class="mb-4">
            <label for="name" class="font-semibold ">Email</label>
            <input type="text" name="name" class="input input-bordered w-full max-w-xs block" value="" />
        </div>

        <!--input Message  -->
        <div class="mb-4 ">
            <label for="description" class="font-semibold ">Votre message</label>
            <textarea name="description" class="textarea textarea-bordered block"></textarea>
        </div>

        <!-- submit btn -->
        <div class="py-5">
            <input type="submit" name="submited" value="Envoyer" class="btn bg-black">
        </div>
    </form>
</div>