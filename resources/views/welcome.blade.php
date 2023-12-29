<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
  <body class="bg-grey-1 font-montserrat">
    <div>
      <img
        class="absolute z-0 shadow"
        src="{{ url('images/background.png') }}"
        alt=""
      />
      <nav
        class="px-14 py-7 text-2xl items-center justify-between text-white font-normal relative flex z-10"
      >
        <div class="flex gap-3 items-center">
          <img class="w-5 drop-shadow-xl" src="{{ url('images/logo.png') }}" alt="" />
          <p class="font-chelsea-market font-bold drop-shadow-xl">
            <a href="index.html"> Bejual </a>
          </p>
        </div>
        <div class="flex gap-5">
          <p>
            <a href="#"> Home </a>
          </p>
          <p>
            <a href="#"> Market </a>
          </p>
          <p>
            <a href="#"> About </a>
          </p>
        </div>

        <div class="flex gap-4 items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            viewBox="0 0 69 69"
            fill="none"
          >
            <path
              d="M53.5502 53.5936C54.8588 52.2938 56.9566 52.2938 58.2652 53.5936L66.9144 60.5752H67.0645C68.8144 62.3439 68.8144 65.2114 67.0645 66.9801C65.3147 68.7488 62.4777 68.7488 60.7278 66.9801L53.5502 58.7539L53.2778 58.4466C52.7705 57.8043 52.4902 57.0037 52.4902 56.1737C52.4902 55.2055 52.8716 54.277 53.5502 53.5936ZM29.7049 0.59375C37.407 0.59375 44.7936 3.68632 50.2399 9.19113C55.6861 14.6959 58.7457 22.1621 58.7457 29.947C58.7457 46.1584 45.7437 59.3003 29.7049 59.3003C13.6661 59.3003 0.664062 46.1584 0.664062 29.947C0.664062 13.7357 13.6661 0.59375 29.7049 0.59375Z"
              fill="white"
            />
          </svg>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            height="20"
            viewBox="0 0 55 69"
            fill="none"
          >
            <path
              d="M27.5267 45.1787C42.3207 45.1787 54.8053 47.5827 54.8053 56.8575C54.8053 66.1357 42.2388 68.4544 27.5267 68.4544C12.7361 68.4544 0.248047 66.0505 0.248047 56.7757C0.248047 47.4974 12.8146 45.1787 27.5267 45.1787ZM27.5267 0.257812C37.5485 0.257812 45.5783 8.28464 45.5783 18.2994C45.5783 28.3142 37.5485 36.3444 27.5267 36.3444C17.5083 36.3444 9.4751 28.3142 9.4751 18.2994C9.4751 8.28464 17.5083 0.257812 27.5267 0.257812Z"
              fill="white"
            />
          </svg>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="white"
            width="25"
          >
            <path
              d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
            />
          </svg>

          <button
            class="bg-green-1 px-4 py-1 rounded-xl hover:bg-transparent hover:border-green-1 hover:border-2 hover:text-green-1 transition duration-50 delay-50 ease-in"
          >
            <a href="#">Login</a>
          </button>
        </div>
      </nav>

      <div class="block relative">
        <div class="w-full mt-24 justify-center flex gap-3 items-center">
          <img class="w-20 drop-shadow-xl" src="{{ url('images/logo.png') }}" alt="" />
          <p
            class="font-bold font-chelsea-market drop-shadow-xl text-white text-9xl"
          >
            <a href="index.html"> Bejual </a>
          </p>
        </div>

        <p class="mt-12 text-white font-normal text-3xl text-center">
          Butuh perlengkapan cepat? Bejual hadir dengan harga terhemat!
        </p>

        <p class="text-white text-center text-2xl font-normal mt-5">
          Jadi pembeli cermat, dengan belanja di olshop terhemat
        </p>

        <div class="flex justify-center mt-10">
          <button
            class="bg-green-1 hover:bg-neutral-600 transition ease-in delay-75 duration-75 hover:border-green-1 text-white font-bold py-2 px-5 text-xl rounded-full"
          >
            <a href="#"> Mulai Belanja </a>
          </button>
        </div>
      </div>

      <div class="my-32 px-16">
        <div class="flex justify-center gap-10">
          <div
            class="flex items-center gap-5 bg-white px-5 py-3 shadow-xl rounded-lg"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="30"
              viewBox="0 0 130 77"
              fill="none"
            >
              <path
                d="M44.4234 73.6807C47.324 73.6807 50.1059 72.5284 52.157 70.4773C54.2081 68.4262 55.3604 65.6444 55.3604 62.7437C55.3604 59.843 54.2081 57.0611 52.157 55.01C50.1059 52.9589 47.324 51.8066 44.4234 51.8066C41.5227 51.8066 38.7408 52.9589 36.6897 55.01C34.6386 57.0611 33.4863 59.843 33.4863 62.7437C33.4863 65.6444 34.6386 68.4262 36.6897 70.4773C38.7408 72.5284 41.5227 73.6807 44.4234 73.6807V73.6807ZM99.1085 73.6807C102.009 73.6807 104.791 72.5284 106.842 70.4773C108.893 68.4262 110.046 65.6444 110.046 62.7437C110.046 59.843 108.893 57.0611 106.842 55.01C104.791 52.9589 102.009 51.8066 99.1085 51.8066C96.2079 51.8066 93.426 52.9589 91.3749 55.01C89.3238 57.0611 88.1715 59.843 88.1715 62.7437C88.1715 65.6444 89.3238 68.4262 91.3749 70.4773C93.426 72.5284 96.2079 73.6807 99.1085 73.6807V73.6807Z"
                stroke="black"
                stroke-width="5.18566"
                stroke-miterlimit="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M31.5731 62.7435H20.3627C19.9318 62.7435 19.5051 62.6587 19.1071 62.4938C18.709 62.3289 18.3473 62.0872 18.0426 61.7825C17.7379 61.4779 17.4962 61.1161 17.3313 60.7181C17.1664 60.32 17.0816 59.8933 17.0816 59.4624V32.6667M55.6346 62.7435H82.7038V5.87095C82.7038 5.00075 82.3581 4.16619 81.7428 3.55086C81.1274 2.93553 80.2929 2.58984 79.4227 2.58984H6.14453L55.6346 62.7435Z"
                stroke="black"
                stroke-width="5.18566"
                stroke-linecap="round"
              />
              <path
                d="M11.6133 18.9951H33.4874"
                stroke="black"
                stroke-width="5.18566"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M82.7031 62.7433H88.1716M82.7031 18.9951H113.382C114.016 18.9953 114.636 19.1792 115.168 19.5247C115.7 19.8703 116.12 20.3625 116.378 20.9419L126.167 42.9691C126.353 43.3873 126.45 43.84 126.451 44.2979V59.4621C126.451 59.893 126.366 60.3197 126.202 60.7178C126.037 61.1159 125.795 61.4776 125.49 61.7822C125.186 62.0869 124.824 62.3286 124.426 62.4935C124.028 62.6584 123.601 62.7433 123.17 62.7433H112.78L82.7031 18.9951Z"
                stroke="black"
                stroke-width="5.18566"
                stroke-linecap="round"
              />
            </svg>
            <p>Diantar ke seluruh Indonesia</p>
          </div>

          <div
            class="flex items-center gap-5 bg-white px-5 py-3 shadow-xl rounded-lg"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="30"
              viewBox="0 0 103 84"
              fill="none"
            >
              <path
                d="M89.0132 53.6926C88.5188 50.2575 85.8666 47.5796 82.4521 46.7813C69.1806 43.6707 65.8537 36.0281 65.2923 27.5512C62.9388 27.1134 58.7518 26.6396 51.6448 26.6396C44.5378 26.6396 40.3509 27.1134 37.9973 27.5512C37.436 36.0281 34.1091 43.6707 20.8375 46.7813C17.4231 47.5847 14.7708 50.2575 14.2764 53.6926L11.7169 71.4189C10.8156 77.6607 15.3991 83.2896 21.7748 83.2896H81.5148C87.8854 83.2896 92.474 77.6607 91.5728 71.4189L89.0132 53.6926ZM51.6448 70.3735C44.4606 70.3735 38.6359 64.6054 38.6359 57.4984C38.6359 50.3914 44.4606 44.6234 51.6448 44.6234C58.8291 44.6234 64.6537 50.3914 64.6537 57.4984C64.6537 64.6054 58.8239 70.3735 51.6448 70.3735ZM102.887 21.4896C102.764 13.7646 83.101 0.894798 51.6448 0.889648C20.1835 0.894798 0.520781 13.7646 0.402331 21.4896C0.283881 29.2146 0.510482 39.2674 13.4576 37.5937C28.6037 35.6315 27.6716 30.3425 27.6716 22.7823C27.6716 17.5087 39.9904 16.2366 51.6448 16.2366C63.2993 16.2366 75.6129 17.5087 75.6181 22.7823C75.6181 30.3425 74.6859 35.6315 89.8321 37.5937C102.774 39.2674 103.006 29.2146 102.887 21.4896Z"
                fill="#282A37"
              />
            </svg>
            <p>Call center 24 jam</p>
          </div>

          <div
            class="flex items-center gap-5 bg-white px-5 py-3 shadow-xl rounded-lg"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="30"
              viewBox="0 0 97 88"
              fill="none"
            >
              <path
                d="M22.0426 5.58984L5.14453 20.0739L22.0426 36.9719"
                stroke="#282A37"
                stroke-width="9.65601"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M5.14453 20.0742H60.6521C77.2677 20.0742 91.3775 33.6409 92.0245 50.2493C92.7101 67.7991 78.2091 82.8383 60.6521 82.8383H19.6237"
                stroke="#282A37"
                stroke-width="9.65601"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            <p>Garansi barang kembali</p>
          </div>
        </div>

        <div class="grid grid-cols-3 gap-16 my-10">
          <div class="bg-white py-7 rounded-xl shadow-xl">
            <img src="image/makeup.png" class="mx-auto flex h-[300px]" alt="" />
            <p class="font-bold text-2xl text-center">Kosmetik</p>
            <div class="mt-5 flex items-center justify-center gap-4">
              <p class="font-semibold text-base">Rp. 30.0000</p>
              <p
                class="bg-green-1 rounded-lg px-3 py-2 text-white font-semibold"
              >
                <a href="#"> Beli sekarang </a>
              </p>
              <div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white py-7 rounded-xl shadow-xl">
            <img src="image/makeup.png" class="mx-auto flex h-[300px]" alt="" />
            <p class="font-bold text-2xl text-center">Kosmetik</p>
            <div class="mt-5 flex items-center justify-center gap-4">
              <p class="font-semibold text-base">Rp. 30.0000</p>
              <p
                class="bg-green-1 rounded-lg px-3 py-2 text-white font-semibold"
              >
                <a href="#"> Beli sekarang </a>
              </p>
              <div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white py-7 rounded-xl shadow-xl">
            <img src="image/makeup.png" class="mx-auto flex h-[300px]" alt="" />
            <p class="font-bold text-2xl text-center">Kosmetik</p>
            <div class="mt-5 flex items-center justify-center gap-4">
              <p class="font-semibold text-base">Rp. 30.0000</p>
              <p
                class="bg-green-1 rounded-lg px-3 py-2 text-white font-semibold"
              >
                <a href="#"> Beli sekarang </a>
              </p>
              <div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white py-7 rounded-xl shadow-xl">
            <img src="image/makeup.png" class="mx-auto flex h-[300px]" alt="" />
            <p class="font-bold text-2xl text-center">Kosmetik</p>
            <div class="mt-5 flex items-center justify-center gap-4">
              <p class="font-semibold text-base">Rp. 30.0000</p>
              <p
                class="bg-green-1 rounded-lg px-3 py-2 text-white font-semibold"
              >
                <a href="#"> Beli sekarang </a>
              </p>
              <div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white py-7 rounded-xl shadow-xl">
            <img src="image/makeup.png" class="mx-auto flex h-[300px]" alt="" />
            <p class="font-bold text-2xl text-center">Kosmetik</p>
            <div class="mt-5 flex items-center justify-center gap-4">
              <p class="font-semibold text-base">Rp. 30.0000</p>
              <p
                class="bg-green-1 rounded-lg px-3 py-2 text-white font-semibold"
              >
                <a href="#"> Beli sekarang </a>
              </p>
              <div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white py-7 rounded-xl shadow-xl">
            <img src="{{ url('images/makeup.png') }}" class="mx-auto flex h-[300px]" alt="" />
            <p class="font-bold text-2xl text-center">Kosmetik</p>
            <div class="mt-5 flex items-center justify-center gap-4">
              <p class="font-semibold text-base">Rp. 30.0000</p>
              <p
                class="bg-green-1 rounded-lg px-3 py-2 text-white font-semibold"
              >
                <a href="#"> Beli sekarang </a>
              </p>
              <div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


