<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit & Resubmit | myITS Fitness</title>

  <!-- Tailwind CDN (quick) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    html, body { font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial; }
    /* show number input arrows (do NOT remove) */
    input[type=number] { -moz-appearance:textfield; }
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button { -webkit-appearance: auto; margin: 0; }
    /* dashed upload box hover */
    .dropzone:hover { border-color: #60a5fa; background: #f8fbff; }
  </style>
</head>

<body class="bg-[#f7f9fc] text-slate-800">
  <!-- Topbar -->
  <header class="h-16 bg-white border-b">
    <div class="max-w-7xl mx-auto h-full px-6 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <!-- biarkan nama file logo seperti punyamu -->
        <img src="/images/myitsfitness-logo.png.png" alt="myITS Fitness" class="h-7 w-auto">
      </div>

      <div class="flex items-center gap-4">
        <button class="text-sm text-slate-600">EN ▾</button>
        <img src="/images/icon-user.png" alt="User" class="w-9 h-9 rounded-full object-cover"/>
      </div>
    </div>
  </header>

  <!-- Ornamens: kiri & kanan -->
  <div class="pointer-events-none select-none relative">
    <img src="/images/back-20ornament.png" alt="" class="hidden lg:block fixed left-4 top-40 h-[460px] opacity-10">
    <img src="/images/back-20ornament.png" alt="" class="hidden lg:block fixed right-4 top-56 h-[460px] opacity-10"
         style="transform: scaleX(-1);" /> 
  </div>

  <main class="max-w-7xl mx-auto px-6 py-8">
    <div class="grid grid-cols-12 gap-8">
      <!-- Sidebar -->
      <aside class="col-span-12 md:col-span-3">
        <nav class="space-y-3">
          <a href="#" class="flex items-center gap-3 rounded-xl border bg-white px-4 py-3 shadow-sm">
            <img src="/images/icon-home.png" class="w-6 h-6" alt=""> <span class="font-medium">Home</span>
          </a>
          <a href="#" class="flex items-center gap-3 rounded-xl border bg-white px-4 py-3 shadow-sm">
            <img src="/images/submission-page.png" class="w-6 h-6" alt=""> <span class="font-medium">Submit</span>
          </a>
          <a href="#" class="flex items-center gap-3 rounded-xl border bg-white px-4 py-3 shadow-sm">
            <img src="/images/status-page.png" class="w-6 h-6" alt=""> <span class="font-medium">Status</span>
          </a>
        </nav>
      </aside>

      <!-- Content -->
      <section class="col-span-12 md:col-span-9">
        <a href="#" class="text-slate-500 underline underline-offset-4">Back to selecting activity</a>
        <h1 class="text-4xl font-extrabold tracking-tight mt-2">Running</h1>

        <div class="mt-6 rounded-2xl bg-white border shadow-sm p-6">
          <form id="resubmitForm" class="grid grid-cols-12 gap-6">
            <!-- left column -->
            <div class="col-span-12 lg:col-span-7">
              <!-- Date -->
              <label class="block text-sm font-semibold text-slate-600">Date of Occurrence</label>
              <div class="mt-2">
                <input
                  id="dateField"
                  type="date"
                  class="w-full rounded-xl border border-slate-300 focus:border-blue-400 focus:ring-2 focus:ring-blue-100 px-4 py-3 text-slate-700"
                  placeholder="dd/mm/yyyy"
                />
              </div>

              <!-- Duration -->
              <div class="mt-6 grid grid-cols-12 gap-3">
                <div class="col-span-6">
                  <label class="block text-sm font-semibold text-slate-600">Session Duration</label>
                  <input
                    id="durationField"
                    type="number"
                    min="1"
                    step="1"
                    value="1"
                    class="mt-2 w-full rounded-xl border border-slate-300 focus:border-blue-400 focus:ring-2 focus:ring-blue-100 px-4 py-3 text-slate-700"
                  />
                </div>
                <div class="col-span-6">
                  <label class="block text-sm font-semibold text-transparent select-none">.</label>
                  <input
                    value="Minutes"
                    disabled
                    class="mt-2 w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-500"
                  />
                </div>
              </div>

              <!-- Place -->
              <div class="mt-6">
                <label class="block text-sm font-semibold text-slate-600">Place of Issue</label>
                <input
                  id="placeField"
                  type="text"
                  placeholder="ex: KONI"
                  class="mt-2 w-full rounded-xl border border-slate-300 focus:border-blue-400 focus:ring-2 focus:ring-blue-100 px-4 py-3 text-slate-700"
                />
              </div>

              <!-- Certificate -->
              <div class="mt-6">
                <label class="block text-sm font-semibold text-slate-600">Certificate or Membership</label>

                <label
                  for="certInput"
                  class="dropzone mt-2 flex h-44 w-full cursor-pointer items-center justify-center rounded-xl border-2 border-dashed border-slate-300 text-center"
                >
                  <div class="space-y-1">
                    <p class="text-slate-600 font-semibold">PNG, JPEG, JPG</p>
                    <p class="text-xs text-slate-400">10 MB MAX</p>
                    <p id="certName" class="text-xs text-slate-500"></p>
                  </div>
                </label>
                <input id="certInput" type="file" accept="image/png,image/jpeg" class="hidden">
              </div>
            </div>

            <!-- right column -->
            <div class="col-span-12 lg:col-span-5">
              <label class="block text-sm font-semibold text-slate-600">Activity Proof</label>

              <label
                for="proofInput"
                class="dropzone mt-2 flex h-64 w-full cursor-pointer items-center justify-center rounded-xl border-2 border-dashed border-slate-300 text-center"
              >
                <div class="space-y-1">
                  <p class="text-slate-600 font-semibold">PNG, JPEG, JPG</p>
                  <p class="text-xs text-slate-400">10 MB MAX</p>
                  <p id="proofName" class="text-xs text-slate-500"></p>
                </div>
              </label>
              <input id="proofInput" type="file" accept="image/png,image/jpeg" class="hidden">

              <!-- Submit button: diposisikan di kolom kanan, tidak terlalu bawah -->
              <div class="mt-6 flex justify-end">
                <button
                  id="submitBtn"
                  type="button"
                  class="rounded-xl bg-[#2367ff] px-6 py-3 text-white font-semibold shadow-sm hover:brightness-110 active:translate-y-px"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </main>

  <!-- Modal: Revision Complete -->
  <div id="revModal" class="fixed inset-0 z-50 hidden">
    <!-- overlay -->
    <div id="overlay" class="absolute inset-0 bg-black/40 opacity-0 transition-opacity"></div>

    <!-- sheet -->
    <div id="sheet"
         class="absolute left-1/2 -translate-x-1/2 bottom-0 w-[min(920px,92vw)] translate-y-full
                transition-transform duration-300 ease-out">
      <div class="bg-white rounded-[28px] shadow-xl overflow-hidden">
        <div class="p-6 sm:p-8">
          <img src="/images/revision-complete.png" alt="Revision Complete" class="w-full h-auto select-none pointer-events-none">
        </div>
      </div>
    </div>
  </div>

  <script>
    // set default date to today
    (() => {
      const el = document.getElementById('dateField');
      if (el && !el.value) {
        const now = new Date();
        const m = String(now.getMonth()+1).padStart(2,'0');
        const d = String(now.getDate()).padStart(2,'0');
        el.value = `${now.getFullYear()}-${m}-${d}`;
      }
    })();

    // file name preview
    const proofInput = document.getElementById('proofInput');
    const certInput  = document.getElementById('certInput');
    if (proofInput) proofInput.addEventListener('change', e => {
      const f = e.target.files?.[0];
      document.getElementById('proofName').textContent = f ? f.name : '';
    });
    if (certInput) certInput.addEventListener('change', e => {
      const f = e.target.files?.[0];
      document.getElementById('certName').textContent = f ? f.name : '';
    });

    // modal logic
    const modal   = document.getElementById('revModal');
    const sheet   = document.getElementById('sheet');
    const overlay = document.getElementById('overlay');

    function openModal() {
      modal.classList.remove('hidden');
      requestAnimationFrame(() => {
        overlay.classList.add('opacity-100');
        sheet.classList.remove('translate-y-full');
      });
    }
    function closeModal() {
      overlay.classList.remove('opacity-100');
      sheet.classList.add('translate-y-full');
      setTimeout(()=> modal.classList.add('hidden'), 280);
    }
    overlay?.addEventListener('click', closeModal);
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

    // submit -> open modal
    document.getElementById('submitBtn')?.addEventListener('click', (e) => {
      e.preventDefault();
      openModal();
    });
  </script>
</body>
</html>
