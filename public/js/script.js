const cvDiv = document.getElementById("cv-div");
const modal = document.getElementById("modal");

// Search for CV via name or key programming language
const onInput = (e) => {
    // Get user input
    const value = e.target.value.toLowerCase();

    const cvs = document.getElementById("cv-div").children;

    for (cv of cvs) {
        const name = cv.querySelector("#cv-name").textContent.toLowerCase();
        const keyprogramming = cv.querySelector("#cv-keyprogramming").textContent.toLowerCase();
        let matchCount = 0;

        if (!keyprogramming.includes(value) && !name.includes(value)) {
            matchCount++;
        }

        cv.style.display = matchCount > 0 ? "none" : "block";
    }
}

const hideModal = () => {
    modal.innerHTML = "";
    modal.classList.remove("y-12", "bg-gray-700", "z-10", "absolute", "top-0", "right-0", "bottom-0", "left-0");
}

const showModal = (cv) => {
    modal.classList.add("y-12", "bg-gray-700", "z-10", "absolute", "top-0", "right-0", "bottom-0", "left-0");

    modal.innerHTML = `<div class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
        <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name"">${cv.name}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <p class = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id = "email">${cv.email}</p>                
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="keyprogramming">Key Programming Languages</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id = "keyprogramming">${cv.email}</p>  
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="profile">Profile</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="profile"">${cv.profile}</p>                
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="education">Education</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="education"">${cv.education}</p>                
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="URLlinks">URL Links</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="URLlinks">${cv.URLlinks}</p>
            </div>
            
            <div class="flex items-center justify-center">
                <button class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="hideModal()">Close</button>
            </div>
        </div>
    </div>`;
}