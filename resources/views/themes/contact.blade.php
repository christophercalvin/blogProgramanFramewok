@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')

<div id="content">
    <div>
        <h3>Hubungi Kami!</h3>
        <p>Kami dengan senang hati menerima kritik dan saran dengan web ini , saran dan keritik kalian sangat membantu kami kok !</a>.</p>
        <form action="#">
            <table>
                <tr>
                    <td><label for="name"><strong>Name:<strong></label></td>
                    <td><input type="text" maxlength="30" id="name" /> </td>
                    <td><label class="email" for="email">Email:</label></td>
                    <td><input type="text" maxlength="30" id="email" /></td>
                </tr>
                <tr>
                    <td><label for="subject"><strong>Subject:</strong></label></td>
                    <td><input type="text" maxlength="30" id="subject" /></td>
                </tr>
                <tr>
                    <td class="message"><label for="message"><strong>Message:</strong></label></td>
                    <td colspan="3"><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><label class="newsletter" for="newsletter"><input type="checkbox" id="newsletter" /><span> Subscribe to newsletter</span></label> <label for="terms"><input type="checkbox" id="terms" /><span> I agree to the Terms and Conditions</span></label></td>
                    <td colspan="1"><input type="submit" value="" id="send" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection