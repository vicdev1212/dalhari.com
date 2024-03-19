@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@vite('resources/css/dashboard.css')
@endpush

@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
@vite('resources/js/dashboard.js')
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-tachometer-alt mr-1"></i>
            {{ __('Dashboard') }}
        </h2>

        <div class="gb_od gb_yd gb_Se gb_We">
            <div class="gb_De">
                <form class="gb_Zd" method="get" role="search" id="aso_search_form_anchor"><button class="gb_Ke gb_Je"
                        aria-label="Close search" type="button"><svg focusable="false" height="24px" viewBox="0 0 24 24"
                            width="24px" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                        </svg></button>
                    <div class="gb_Pe gb_Je">
                        <table cellspacing="0" cellpadding="0" class="gstl_50 gstt" role="presentation"
                            style="height: 28px;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td class="gsib_a gb_ve">
                                                        <div id="gs_lc50" style="position: relative;"><input
                                                                class="gb_ve" aria-label="Search bar" autocomplete="off"
                                                                placeholder="Search" role="combobox" value="" name="q"
                                                                type="text"
                                                                style="border: none; padding: 0px; margin: 0px; height: auto; width: 100%; background: url(&quot;data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw%3D%3D&quot;) transparent; position: absolute; z-index: 6; left: 0px;"
                                                                dir="ltr" spellcheck="false" aria-autocomplete="list"
                                                                aria-haspopup="true" aria-live="off"
                                                                aria-owns="gs_sbt50"><input disabled=""
                                                                autocomplete="off" autocapitalize="off" id="gs_taif50"
                                                                class="gb_ve" dir="ltr"
                                                                style="border: none; padding: 0px; margin: 0px; height: auto; width: 100%; position: absolute; z-index: 1; background-color: transparent; -webkit-text-fill-color: silver; color: silver; left: 0px;">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><button class="gb_Le" aria-label="Clear search" type="button"><svg focusable="false"
                            height="24px" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                            </path>
                            <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg></button><button class="gb_Ie gb_Je" aria-label="Search" role="button"><svg
                            focusable="false" height="24px" viewBox="0 0 24 24" width="24px"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.49,19l-5.73-5.73C15.53,12.2,16,10.91,16,9.5C16,5.91,13.09,3,9.5,3S3,5.91,3,9.5C3,13.09,5.91,16,9.5,16 c1.41,0,2.7-0.47,3.77-1.24L19,20.49L20.49,19z M5,9.5C5,7.01,7.01,5,9.5,5S14,7.01,14,9.5S11.99,14,9.5,14S5,11.99,5,9.5z">
                            </path>
                            <path d="M0,0h24v24H0V0z" fill="none"></path>
                        </svg></button>
                    <table cellspacing="0" cellpadding="0" class="gstl_50 gssb_c" role="presentation"
                        style="width: 100%; position: relative; text-align: left; display: none;" dir="ltr">
                        <tbody>
                            <tr>
                                <td class="gssb_n"></td>
                                <td class="gssb_e" style="width: 100%;">
                                    <table cellspacing="0" cellpadding="0" role="presentation" id="gs_sbt50"
                                        class="gssb_m" style="width: 100%;">
                                        <tbody role="listbox" class="ASO_SUGGESTIONS_CONTAINER"
                                            aria-activedescendant="gs_ars50_0"></tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div
                        style="background: transparent; color: rgb(0, 0, 0); padding: 0px; position: absolute; white-space: pre; visibility: hidden;">
                    </div>
                </form>
            </div>
        </div>
    </x-slot>

    {{-- Header --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="docs-homescreen-item-section" id="doc_card_area">
                        <div class="docs-homescreen-templates-templateview docs-homescreen-templates-templateview-showcase docs-homescreen-itemview-disabled"
                            role="option" id=":1i" tabindex="-1" aria-disabled="true">
                            <div class="docs-homescreen-templates-templateview-preview docs-homescreen-templates-templateview-preview-showcase"
                                aria-labelledby=":1i">
                                <div
                                    class="docs-homescreen-templates-templateview-preview-overlay docs-homescreen-templates-templateview-preview-showcase-overlay">
                                </div>
                                <img src="https://ssl.gstatic.com/docs/templates/thumbnails/docs-blank-googlecolors.png"
                                    alt="" data-nsfw-filter-status="sfw" style="visibility: visible;">
                            </div>
                            <div class="docs-homescreen-templates-templateview-caption">
                                <div class="docs-homescreen-templates-templateview-metadata">
                                    <div title="Blank document" class="docs-homescreen-templates-templateview-title">
                                        Blank document</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Editor --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div id="editor-container" class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Input Form for Doc Name --}}
                    <div class="rounded">
                        {{-- Save Button --}}
                        <div class="rounded float-right">
                            <button id="save"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-save mr-1"></i>
                                Save
                            </button>
                        </div>
                        {{-- Clear Button --}}
                        <div class="rounded float-right mr-2">
                            <button id="clear"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-trash mr-1"></i>
                                Clear
                            </button>
                        </div>
                        {{-- Doc Name Input --}}
                        <label for="doc-title"></label>
                        <input id="doc-title"
                            class="bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100 font-bold py-2 px-4 rounded"
                            name="doc-title" type="text" placeholder="Title">
                    </div>
                    {{-- Editor --}}
                    <div id="editor-js"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Docs Table --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="docs-data-table" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>