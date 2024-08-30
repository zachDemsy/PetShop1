function updateBreeds() {
    const petType = document.getElementById('petType').value;
    const breedSelect = document.getElementById('breed');

    // Clear existing options
    breedSelect.innerHTML = '<option value="">Select Breed</option>';

    let breeds = [];
    switch (petType) {
        case 'Dog':
            breeds = ["Labrador Retriever",
                "German Shepherd",
                "Golden Retriever",
                "Bulldog",
                "Beagle",
                "Poodle",
                "Rottweiler",
                "Yorkshire Terrier",
                "Boxer",
                "Dachshund",
                "Siberian Husky",
                "Great Dane",
                "Doberman Pinscher",
                "Shih Tzu",
                "Australian Shepherd",
                "Border Collie",
                "Chihuahua",
                "Pug",
                "Cocker Spaniel",
                "Bichon Frise",
                "Schnauzer",
                "Pit Bull Terrier",
                "Akita",
                "Pomeranian",
                "Havanese",
                "Saint Bernard",
                "French Bulldog",
                "Maltese",
                "Weimaraner",
                "Bernese Mountain Dog",
                "Boston Terrier"
            ];
            break;
        case 'Cat':
            breeds = ["Persian",
                "Maine Coon",
                "Siamese",
                "Ragdoll",
                "Bengal",
                "Sphynx",
                "British Shorthair",
                "Abyssinian",
                "Scottish Fold",
                "Siberian",
                "Birman",
                "American Shorthair",
                "Norwegian Forest Cat",
                "Russian Blue",
                "Devon Rex",
                "Cornish Rex",
                "Himalayan",
                "Oriental Shorthair",
                "Manx",
                "Somali",
                "Egyptian Mau",
                "Turkish Angora",
                "Savannah",
                "Selkirk Rex",
                "Turkish Van",
                "Singapura",
                "LaPerm",
                "Ocicat",
                "Munchkin",
                "Cymric",
                "Snowshoe"
            ];
            break;
        case 'Fish':
            breeds = ["Clownfish",
                "Goldfish",
                "Betta",
                "Guppy",
                "Angelfish",
                "Neon Tetra",
                "Oscar",
                "Corydoras",
                "Swordtail",
                "Molly",
                "Platies",
                "Rainbowfish",
                "Discus",
                "Gourami",
                "Zebra Danio",
                "Pufferfish",
                "Catfish",
                "Koi",
                "Barbs",
                "Siamese Fighting Fish",
                "Tetra",
                "Convict Cichlid",
                "Rasbora",
                "Livebearer",
                "Dwarf Gourami",
                "Rainbow Shark",
                "Climbing Perch",
                "Harlequin Rasbora",
                "Freshwater Eel",
                "Blue Tang",
                "Lionfish"
            ];
            break;
        case 'Reptiles':
            breeds = ["Green Iguana",
                "Bearded Dragon",
                "Leopard Gecko",
                "Corn Snake",
                "Ball Python",
                "Chameleon",
                "Komodo Dragon",
                "Sulcata Tortoise",
                "Russian Tortoise",
                "Red-Eared Slider",
                "Garter Snake",
                "King Cobra",
                "Boa Constrictor",
                "American Alligator",
                "Crocodile",
                "Water Dragon",
                "Veiled Chameleon",
                "Creeping Python",
                "Blue-Tongued Skink",
                "Aldabra Giant Tortoise",
                "Anole",
                "Basilisk",
                "Green Tree Python",
                "Sunda Flying Dragon",
                "African Spurred Tortoise",
                "Tegu",
                "Horned Lizard",
                "Puff Adder",
                "Mojave Rattlesnake",
                "Leopard Tortoise",
                "Columbian Red Tail Boa"
            ];
            break;
    }

    // Populate the breed select box
    breeds.forEach(breed => {
        const option = document.createElement('option');
        option.value = breed;
        option.textContent = breed;
        breedSelect.appendChild(option);
    });
}