$(document).on('click','#add_hymn',function() {
   $('#AddHymnModal').modal('show');
});

$(document).on('click','#add_user',function() {
   $('#AddUserModal').modal('show');
});

$(document).on('click','#add-hymn',function() {
    $('.hide_for_edit').show();

    if($(this).data('hymn_type') == 0)
    {
        $('#ehmt').text('Add Main Hymn');
    }

    if($(this).data('hymn_type') == 1)
    {
        $('#ehmt').text('Add Appendix Hymn');
    }
    $('#id').val($(this).data('id'));
    $('#m_id').val($(this).data('id'));
    $('#edpst').val(0);
    $('#hymn_type').val($(this).data('hymn_type'));
    $('#english').val($(this).data('english'));
    $('#yoruba').val($(this).data('yoruba'));
    $('#EditHymn').modal('show');
});
$(document).on('click','#edit-hymn',function() {
    $('.hide_for_edit').hide();

    if($(this).data('hymn_type') == 0)
    {
        $('#ehmt').text('Edit Main Hymn ' + $(this).data('id'));
    }

    if($(this).data('hymn_type') == 1)
    {
        $('#ehmt').text('Edit Appendix Hymn ' + $(this).data('id'));
    }
    $('#id').val($(this).data('id'));
    $('#m_id').val($(this).data('id'));
    $('#edpst').val(1);
    $('#hymn_type').val($(this).data('hymn_type'));
    $('#english').val($(this).data('english'));
    $('#yoruba').val($(this).data('yoruba'));
    $('#EditHymn').modal('show');
});
$(document).on('click','#view-logistics',function() {
    $('#ViewLogistics').modal('show');
});
function getConfirmation(id,hymn_type){
    var retVal = confirm("Are you sure you want to delete?");
    if (retVal == true)
    {
        if(hymn_type == 0)
        {
            window.open('main/delete/' + id,"_self");
        }
        else if(hymn_type == 1)
        {
            window.open('appendix/delete/' + id,"_self");
        }
    }
    else
    {
        return false;
    }
}
$(document).on('click','#edit-verse',function() {
    $('.hide_for_edit').hide();

    if($(this).data('hymn_verse_type') == 0)
    {
        $('#ehmt').text('Edit Main Hymn '  + $(this).data('hymn_id') + ' Verse ' + $(this).data('verse_id'));
    }

    if($(this).data('hymn_verse_type') == 1)
    {
        $('#ehmt').text('Edit Appendix Hymn Verse' + $(this).data('hymn_id') + ' Verse ' + $(this).data('verse_id'));
    }
    $('#hymn_id').val($(this).data('hymn_id'));
    $('#main_hymn_id').val($(this).data('hymn_id'));
    $('#verse_id').val($(this).data('verse_id'));
    $('#main_verse_id').val($(this).data('verse_id'));
    $('#id').val($(this).data('id'));
    $('#m_id').val($(this).data('id'));
    $('#edvrs').val(1);
    $('#hymn_verse_type').val($(this).data('hymn_verse_type'));
    $('#english').val($(this).data('english'));
    $('#yoruba').val($(this).data('yoruba'));
    $('#EditVerse').modal('show');
});
function getVerseConfirmation(id,hymn_type){
    var retVal = confirm("Are you sure you want to delete?");
    if (retVal == true)
    {
        if(hymn_type == 0)
        {
            window.open('vd/' + id,"_self");
        }
        else if(hymn_type == 1)
        {
            window.open('vd/' + id,"_self");
        }
    }
    else
    {
        return false;
    }
}
$(document).on('click','#add-verse',function() {
    if($(this).data('hymn_verse_type') == 0)
    {
        $('#ehmt').text('Add Verse To Main Hymn '  + $(this).data('hymn_id'));
    }

    if($(this).data('hymn_verse_type') == 1)
    {
        $('#ehmt').text('Edit Appendix Hymn Verse' + $(this).data('hymn_id') + ' Verse ' + $(this).data('verse_id'));
    }

    $('.hide_for_edit').hide();
    $('#hymn_id').val($(this).data('hymn_id'));
    $('#main_hymn_id').val($(this).data('hymn_id'));
    $('#main_verse_id').val($(this).data('total_verse') + 1);
    $('#edvrs').val(0);
    $('#hymn_verse_type').val($(this).data('hymn_verse_type'));
    $('#english').val($(this).data('english'));
    $('#yoruba').val($(this).data('yoruba'));
    $('#EditVerse').modal('show');
});