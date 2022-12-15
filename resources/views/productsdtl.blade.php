@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
  <div class="flex flex-wrap justify-center" id="tabs-id">
    <div class="w-full lg:w-6/12 px-4">
      <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">eYFi-Mega & eYLFA References</h1>
    </div>
    

    <div class="container py-4 lg:w-2/3 md:6/12 mt-8 rounded mx-auto bg-white lg:text-xl md:text-lg text-gray-700">
      <div class="px-2 lg:px-4">
        <table class="table-auto border-separate border border-gray-800 lg:w-full">
          <tr>
            <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800" colspan="2"><i class="fas fa-book"></i>&nbsp; 1. eYFI Mega Documentation</th>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">Hardware Manual</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://raw.githubusercontent.com/eyantra-products/eyfi-mega-docs/master/eYFi_Mega_Hardware_Manual.pdf" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-2 rounded inline-flex items-center" target="_blank">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
              </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">Software Manual</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://raw.githubusercontent.com/eyantra-products/eyfi-mega-docs/master/eYFi_Mega_Software_Manual.pdf" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-2 rounded inline-flex items-center" target="_blank">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
              </a>
            </td>
          </tr>
          <tr>
            <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800" colspan="2"><i class="fas fa-circle-chevron-down"></i>&nbsp; eYFI Mega Downloads</th>
          </tr>
          <tr>
            <th class="border border-gray-600 p-2 bg-gray-200 text-gray-800" colspan="2">eY- IDE</th>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">VS Code (Linux, 64-Bit)</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1_vmtnWX4Q5TxXv6xEeRi9AWWFOuGtmeF/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
            </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">Extensions</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1XME9MjbejFq04vW3a2f9GyCaOZ_ut0v5/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 mt-2 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
            </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">eY-Toolchain</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1TkfivUcgRqiZ_N__Ch-ywrkR9UYqViav/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 mt-2 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
            </a>
            </td>
          </tr>
          <!-- ------------------------ -->
          <tr>
            <th class="border border-gray-600 p-2 bg-gray-200 text-gray-800" colspan="2">eYFi-Mega Bootloaders</th>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">ATmega 2560</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1BwXsAaiJYopFkXJDlaIHU_QnjZeEvIsW/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
              </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">ESP32</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1n0l21hZjSWZRlSIkBk-AzNNtPZgxo1jG/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 mt-2 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
              </a>
            </td>
          </tr>
          <!-- ------------------------------- -->
          <tr>
            <th class="border border-gray-600 p-2 bg-gray-200 text-gray-800" colspan="2">eYFi-Mega ESP32 Specific</th>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">ESPTOOL</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1HievOWMa30PXHzG5EF6rqdZH9ON2crv1/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
            </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">ESP32 Partition Table</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1nUJRqyuROc3QpN4rqwx2xweBZtUB-yMb/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 mt-2 rounded inline-flex items-center">
             <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
             <span>Download</span>
            </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">ESP32 OTA Application</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1lTBG7AdAXftwd9IiYUYUlnicuPOmmrJF/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 rounded inline-flex items-center">
             <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
             <span>Download</span>
            </a>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">ESP32 Wireless Terminal Application</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1Wzmp8Vp14wcltIns1vCOlfKtTuPIYSQe/view" target="_blank" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 mt-2 rounded inline-flex items-center">
             <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
             <span>Download</span>
            </a>
            </td>
          </tr>
          <tr>
            <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800" colspan="2"><i class="fas fa-book"></i>&nbsp; 2. eY LFA Documentation</th>
          </tr>
          <tr>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800">eY-LFA Hookup Guide</td>
            <td class="border border-gray-600 p-2 bg-gray-200 text-gray-800 text-center">
              <a href="https://drive.google.com/file/d/1OWstzCnSiqM_A6AN6LwiCoB0BNqfeXUM/view" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-2 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
              </a>
            </td>
          </tr>            
        </table>
      </div>
    </div>
  </div>
</section>
@stop



