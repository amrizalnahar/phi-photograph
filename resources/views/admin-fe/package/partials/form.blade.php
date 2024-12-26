<div class="md:w-1/2">
    <div class="mt-6">

        <!-- Dropdown -->
        <label class="block mb-2 text-sm font-medium text-gray-700" for="images">Package Type</label>
        <select
            class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
            id="options" name="options">
            <option value="" disabled selected>Select Package Type</option>
            <option value="option1">Wedding</option>
            <option value="option2">Prewedding</option>
            <option value="option3">Graduation</option>
        </select>

        <!-- Input Text -->
        {{-- <label class="block mb-2 text-sm font-medium text-gray-700" for="images">Package Name</label>
        <input
            class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
            type="text" placeholder="Input Package Name"> --}}

        <!-- Upload Images -->
        <label class="block mb-2 text-sm font-medium text-gray-700" for="images">Upload Images</label>
        <input
            class="block w-full py-2 px-3 mb-5 text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
            type="file" id="images" name="images" accept="image/*">

        <!-- Textarea -->
        <label class="block mb-2 text-sm font-medium text-gray-700" for="images">Description</label>
        <textarea class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
            name="description" id="description" cols="30" rows="10" placeholder="Input Description"></textarea>

        <!-- Repeater Section -->
        <div id="repeater-section">
            <label class="block mb-2 text-sm font-medium text-gray-700">Pricelist</label>
            <div class="repeater-item relative border border-gray-300 rounded-lg p-4 mb-4">
                <button type="button" class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded"
                    onclick="removeRepeaterItem(this)">
                    Delete
                </button>
                <input
                    class="border-b-2 w-full py-2 px-3 mb-5 mt-7 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                    type="text" name="pricelist_name[]" placeholder="Input Pricelist Name">
                <input
                    class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                     type="text" name="pricelist_price[]" id="pricelist_price" placeholder="Input Price"
                    oninput="formatRupiah(this)">
                <input
                    class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                     type="number" name="pricelist_discount[]" id="pricelist_discount" placeholder="Input Discount (%)">
                <textarea
                    class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                    name="pricelist_description[]" rows="4" placeholder="Input Description"></textarea>
            </div>
        </div>
        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow"
            onclick="addRepeaterItem()">
            Add Pricelist
        </button>
    </div>
</div>


<!-- JavaScript for Repeater -->
<script>
    function addRepeaterItem() {
        const repeaterSection = document.getElementById('repeater-section');
        const newItem = document.createElement('div');
        newItem.className = 'repeater-item relative border border-gray-300 rounded-lg p-4 mb-4';
        newItem.innerHTML = `
            <button type="button" class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded"
                onclick="removeRepeaterItem(this)">
                Delete
            </button>
            <input
                class="border-b-2 w-full py-2 px-3 mb-5 mt-7 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                type="text" name="pricelist_name[]" placeholder="Input Pricelist Name">
            <input
                class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                 type="text" name="pricelist_price[]" id="pricelist_price" placeholder="Input Price"
                oninput="formatRupiah(this)">
            <input
                class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                 type="number" name="pricelist_discount[]" id="pricelist_discount" placeholder="Input Discount (%)">
            <textarea
                class="border-b-2 w-full py-2 px-3 mb-5 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                name="pricelist_description[]" rows="4" placeholder="Input Description"></textarea>
        `;
        repeaterSection.appendChild(newItem);
    }

    function removeRepeaterItem(button) {
        button.parentElement.remove();
    }
</script>

<script>
    function formatRupiah(input) {
        // Hapus semua karakter non-digit
        let value = input.value.replace(/[^,\d]/g, '');

        // Ubah ke format angka
        const numberString = value.replace(/[^,\d]/g, '');
        const split = numberString.split(',');
        const sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        const ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // Tambahkan titik jika ada ribuan
        if (ribuan) {
            const separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        // Tambahkan bagian desimal (jika ada)
        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;

        // Update nilai input
        input.value = 'Rp. ' + rupiah;
    }
</script>
