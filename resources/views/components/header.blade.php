@props([
    'bottom'   
])
<div class="page-header" style="bottom: {{ $bottom }}pt; z-index:-1;"></div>
<div class="position-absolute w-100" style="bottom: {{$bottom}}pt; z-index:-1;">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="moving-waves">
        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(233,236,239,0.40"></use>
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(233,236,239,0.35)"></use>
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(233,236,239,0.25)"></use>
        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(233,236,239,0.20)"></use>
        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(233,236,239,0.15)"></use>
        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(233,236,239,1"></use>
    </g>
    </svg>
</div>