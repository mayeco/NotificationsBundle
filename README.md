NotificationsBundle
===================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8ba31502-2260-4c8c-b4d5-ae87898514bd/big.png)](https://insight.sensiolabs.com/projects/8ba31502-2260-4c8c-b4d5-ae87898514bd)

`THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.`

A bundle for [2Checkout](https://www.2checkout.com/documentation/notifications/) notifications, use it at your **own risk**.

changes in routing.yml

    mayeco_notifications:
        resource: "@MayecoNotificationsBundle/Resources/config/routing.xml"
        prefix:   /notifications

changes in config.yml

    mayeco_notifications:
        secret_word: your_2checkout_secret_word
        user_id: your_2checkout_user_id
        redirection_route: your_redirect_route
