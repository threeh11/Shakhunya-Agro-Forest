<div class="hidden text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="contactsBlock">
        <div class="flex flex-wrap justify-between">
            <x-elemContacts name="Телефон" value="{{ $contacts[0]->phone }}"/>
            <x-elemContacts name="ОГРН" value="{{ $contacts[0]->OGRN }}"/>
        </div>
        <div class="flex flex-wrap justify-between">
            <x-elemContacts name="Электронная почта" value="{{ $contacts[0]->email }}"/>
            <x-elemContacts name="ИНН" value="{{ $contacts[0]->INN }}"/>
        </div>
        <div class="flex flex-wrap justify-between">
            <x-elemContacts name="Наименование" value="{{ $contacts[0]->naming }}"/>
            <x-elemContacts name="КПП" value="{{ $contacts[0]->KPP }}"/>
        </div>
        <div class="flex flex-wrap justify-between mb-5">
            <x-elemContacts name="Юридический адрес" value="{{ $contacts[0]->legal_address }}"/>
            <x-elemContacts name="Дата регистрации" value="{{ $contacts[0]->date_reg }}"/>
        </div>
</div>
