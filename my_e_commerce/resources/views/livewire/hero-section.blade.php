<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:items-center">
    <div class="mx-auto max-w-xl text-center">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Sàn thương mại điện tử về thời trang
        <strong class="font-extrabold text-gray-700 sm:block text-3xl">
          Khám phá ngay các sản phẩm chất lượng.
        </strong>
      </h1>

      <p class="mt-4 sm:text-xl/relaxed">
        Tham khảo bộ sưu tập các sản phẩm chất lượng cao và trải nghiệm mua sắm trực tuyến liền mạch.
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        @if (auth()->check())
          <a
            class="block w-full rounded bg-gray-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none focus:ring active:bg-gray-500 sm:w-auto"
            href="/offer"
          >
            Nhận ưu đãi ngay!
          </a>
        @else
          <a
            class="block w-full rounded bg-gray-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none focus:ring active:bg-gray-500 sm:w-auto"
            href="/auth/login"
          >
            Bắt đầu ngay
          </a>
        @endif

        <a wire:navigate
          class="block w-full bg-white rounded px-12 py-3 text-sm font-medium text-gray-600 shadow hover:text-gray-700 focus:outline-none focus:ring active:text-gray-500 sm:w-auto"
          href="all/products"
        >
          Khám phá thêm
        </a>
      </div>
    </div>
  </div>
</section>
