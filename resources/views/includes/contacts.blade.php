<div class="block py-10 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="contactsBlock">
    <div class="grid grid-cols-2 left">
        <x-elemContacts name="Телефон" value="{{ $contacts[0]->phone }}"/>
        <x-elemContacts name="ОГРН" value="{{ $contacts[0]->OGRN }}"/>
        <x-elemContacts name="Электронная почта" value="{{ $contacts[0]->email }}"/>
        <x-elemContacts name="ИНН" value="{{ $contacts[0]->INN }}"/>
        <x-elemContacts name="Наименование" value="{{ $contacts[0]->naming }}"/>
        <x-elemContacts name="КПП" value="{{ $contacts[0]->KPP }}"/>
        <x-elemContacts name="Юридический адрес" value="{{ $contacts[0]->legal_address }}"/>
        <x-elemContacts name="Дата регистрации" value="{{ $contacts[0]->date_reg }}"/>
    </div>
</div>
