@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-6">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('นโยบายการเข้าใช้งาน website') }}</h1>

                </div>

            </div>
            <div class="row mt-12">
                <div class="col-xl-12 mb-10 mb-xl-0">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row">
                                <h3 class="mb-0">Site Policy </h3>
                            </div>
                            <div class="row">
                                <p>
                                    <li class="text align-left">
                                        ผู้ใช้บริการอาจได้รับ เข้าถึง สร้าง ส่งหรือแสดงข้อมูล เช่น ไฟล์ข้อมูล
                                    ข้อความลายลักษณ์อักษร ซอฟต์แวร์คอมพิวเตอร์ ดนตรี ไฟล์เสียง หรือเสียงอื่น ๆ
                                    ภาพถ่าย วิดีโอ หรือรูปภาพอื่น ๆ โดยเป็นส่วนหนึ่งของบริการหรือโดยผ่านการใช้บริการ
                                    ซึ่งต่อไปนี้จะเรียกว่า "เนื้อหา"
                                    </li>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
    </svg>
</div>
</div>

<div class="container mt--10 pb-5"></div>
@endsection
