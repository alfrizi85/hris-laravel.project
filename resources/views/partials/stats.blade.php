<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mt-8">

    <x-stat-card
        title="Total Pegawai"
        :value="$totalEmployees"
        icon="👥"
        color="from-[#5C4033] to-[#7A5643]"
    />

    <x-stat-card
        title="Total Divisi"
        :value="$totalDivisions"
        icon="🏢"
        color="from-[#7A5643] to-[#9B6B53]"
    />

    <x-stat-card
        title="Total Jabatan"
        :value="$totalPositions"
        icon="💼"
        color="from-[#8B5E3C] to-[#A67B5B]"
    />

    <x-stat-card
        title="Hadir Hari Ini"
        :value="$todayAttendance"
        icon="✅"
        color="from-[#6D4C41] to-[#8D6E63]"
    />

</div>