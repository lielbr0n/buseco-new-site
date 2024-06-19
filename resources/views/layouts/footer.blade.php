 <!--logos-->
 <div class="corporate-partners" id="corporate-partners">
    <div class="flex gap-4 justify-center p-5">
        <a href="https://www.nea.gov.ph/ao39/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/NEA-LOGO-150.png')}}" alt="" /></a>
        <a href="https://doe.gov.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/doe_logo-150.jpg')}}" alt="" /></a>
        <a href="https://www.ngcp.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/ngc-150.png')}}" alt="" /></a>
        <a href="https://www.erc.gov.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/ERC-150.jpg')}}" alt="" /></a>
        <a href="https://www.transco.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/transco-150.jpg')}}" alt="" /></a>
        <a href="https://www.napocor.gov.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/npr-150.png')}}" alt="" /></a>
    </div>
</div>
<!--end logos-->

<footer class="footer-siteinfo" id="footer-siteinfo">
    <div class="grid mx-auto max-w-7xl grid-cols-4 gap-4 mx-2 py-10">
        <div class="branch-info">
        {{--<h2 class="footer-title mb-6 border-b w-11/12">HOTLINES</h2> 
            <p><b>Address:</b> Tankulan, Manolo Fortich, Bukidnon</p>
            <p><b>Smart:</b> 0998-843-8334</p>
            <p><b>Globe:</b> 0935-144-3095</p>
            <br />

            <h2 class="branch-title">Malaybalay Branch</h2>
            <p><b>Address:</b> Casisang, Malaybalay City, Bukidnon</p>
            <p><b>Smart:</b> 0998-843-8335</p>
            <p><b>Globe:</b> 0935-144-2484</p>--}}
            <br>
        <a href="{{ url('/') }}"><img class="h-20 w-auto mx-auto" src="{{url('/images/busecoborder.png')}}" alt="buseco" /></a>
            <div class="flex gap-3 justify-center mt-4">
                <!--fbicon-->
                <a href="https://www.facebook.com/BUSECOKasanagMCOs" target="facebook">
                <button
                    type="button"
                    data-twe-ripple-init
                    data-twe-ripple-color="light"
                    class="mb-2 inline-block rounded bg-[#1877f2] px-4 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 320 512">
                        <path
                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                    </span>
                </button>
                </a>
                <!--googleicon-->
                <button
                    type="button"
                    data-twe-ripple-init
                    data-twe-ripple-color="light"
                    class="mb-2 inline-block rounded bg-[#ea4335] px-4 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 488 512">
                        <path
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                        </svg>
                    </span>
                </button>
               
            {{--<a href="https://www.facebook.com/BUSECOKasanagMCOs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0866ff" class="bi bi-facebook fb-svg" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>--}}
                {{--<a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#249ef0" class="bi bi-twitter twitter-svg" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                    </svg>
                </a>--}}

            </div>
        </div>
         <!--footer2 --> 
        <div class="branch-info">
            <h2 class="footer-title mb-6 border-b w-11/12">HOTLINE NUMBERS</h2>

            <h2 class="branch-title"><b>Manolo Fortich Branch</b></h2>

            <p>Tankulan, Manolo Fortich, Bukidnon</p>
            <p><b>Smart:</b> 0998-843-8334</p>
            <p><b>Globe:</b> 0935-144-3095</p>
            <br />

            <h2 class="branch-title"><b>Malaybalay Branch</b></h2>
            <p>Casisang, Malaybalay City, Bukidnon</p>
            <p><b>Smart:</b> 0998-843-8335</p>
            <p><b>Globe:</b> 0935-144-2484</p>
        </div>
        <!--footer3 -->
        <div class="branch-info">
            <h2 class="footer-title mb-6 border-b w-11/12">OFFICE HOURS</h2>
            <h2 class="branch-title"><b>MONDAY - FRIDAY</b></h2>
            <p>Manolo Fortich: 8:00AM-5:00PM</p>
            <p>Malaybalay City: 8:00AM-5:00PM</p>
        </div>
         <!--footer4 -->      
        <div class="links-info pr-1">
            <h2 class="footer-title mb-6 border-b w-11/12">LINKS</h2>

            <a href="https://online.buseco.coop/" class="link-footer">Membership Application</a><br />
            <a href="https://buseco.coop/my-account-login/" class="link-footer">My Account</a><br />
            <a href="/coop-news" class="link-footer">News and Updates</a><br />
            <a href="/privacy" class="link-footer">Privacy</a><br />
        </div>

    </div>
    <div class="all-rights-reserved py-4"><p class="all-rights-text text-center">&copy; 2024 BUKIDNON II ELECTRIC COOPERATIVE, INC. All Rights Reserved</p></div>
    <div class="madewithlove"><p class="all-rights-text text-center">catscanc0de&trade;</p><br></div>
</footer>