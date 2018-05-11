<?php
use Migrations\AbstractSeed;

/**
 * Initial seed.
 */
class InitialSeed extends AbstractSeed
{
    private $datetime = null;

    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $this->datetime = date('Y-m-d H:i:s');

        $this->seedPhoneTypes();
        $this->seedContacts();
        $this->seedPhones();
    }

    private function seedPhoneTypes()
    {
        $table = $this->table('phone_types');

        $data = [
            [
                'id'    => '22d5a76f-5418-11e8-a5d9-0242ac130002',
                'name'  => 'home',
                'created' => $this->datetime
            ],
            [
                'id'    => '22d5aa83-5418-11e8-a5d9-0242ac130002',
                'name'  => 'work',
                'created' => $this->datetime
            ],
            [
                'id'    => '22d5aefe-5418-11e8-a5d9-0242ac130002',
                'name'  => 'cellular',
                'created' => $this->datetime
            ],
            [
                'id'    => '22d5afc7-5418-11e8-a5d9-0242ac130002',
                'name'  => 'other',
                'created' => $this->datetime
            ]
        ];

        $table->insert($data)->save();
    }

    private function seedPhones()
    {
        $table = $this->table('phones');

        $data = [
            [
                'id'            => '22d5a76f-5418-11e8-a5d9-0242ac130002',
                'contact_id'    => '2cf8d460-4c57-489a-bb74-b7ab4164152a',
                'number'        => '7704789276',
                'phone_type_id' => '22d5a76f-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => '038bf1c0-555e-11e8-a5d9-0242ac130002',
                'contact_id'    => '038bf171-555e-11e8-a5d9-0242ac130002',
                'number'        => '6362193074',
                'phone_type_id' => '22d5aa83-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => '4698d9d8-555e-11e8-a5d9-0242ac130002',
                'contact_id'    => '4698d954-555e-11e8-a5d9-0242ac130002',
                'number'        => '9253354681',
                'phone_type_id' => '22d5aefe-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => 'cd4e3130-555e-11e8-a5d9-0242ac130002',
                'contact_id'    => 'cd4e30e0-555e-11e8-a5d9-0242ac130002',
                'number'        => '7704329741',
                'phone_type_id' => '22d5afc7-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => 'eb0511ba-555e-11e8-a5d9-0242ac130002',
                'contact_id'    => 'eb05116f-555e-11e8-a5d9-0242ac130002',
                'number'        => '6468793583',
                'phone_type_id' => '22d5a76f-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => '19e3972a-555f-11e8-a5d9-0242ac130002',
                'contact_id'    => '19e396d2-555f-11e8-a5d9-0242ac130002',
                'number'        => '3343127699',
                'phone_type_id' => '22d5aa83-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => '21f60866-555f-11e8-a5d9-0242ac130002',
                'contact_id'    => '21f6081a-555f-11e8-a5d9-0242ac130002',
                'number'        => '6016644075',
                'phone_type_id' => '22d5aefe-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => '749b9d54-555f-11e8-a5d9-0242ac130002',
                'contact_id'    => '749b9d09-555f-11e8-a5d9-0242ac130002',
                'number'        => '2092196841',
                'phone_type_id' => '22d5afc7-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => '7d4f9c59-555f-11e8-a5d9-0242ac130002',
                'contact_id'    => '7d4f9bac-555f-11e8-a5d9-0242ac130002',
                'number'        => '4084422681',
                'phone_type_id' => '22d5a76f-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ],
            [
                'id'            => 'dc6b149f-555f-11e8-a5d9-0242ac130002',
                'contact_id'    => 'dc6b1454-555f-11e8-a5d9-0242ac130002',
                'number'        => '8055646416',
                'phone_type_id' => '22d5aa83-5418-11e8-a5d9-0242ac130002',
                'is_main'       => 1,
                'created'       => $this->datetime,
                'modified'      => $this->datetime,
            ]
        ];

        $table->insert($data)->save();
    }

    private function seedContacts()
    {
        $table = $this->table('contacts');

        $data = [
            [
                'id'            => '2cf8d460-4c57-489a-bb74-b7ab4164152a',
                'first_name'    => 'Elizabeth',
                'last_name'     => 'Bowers',
                'email'         => 'user01@example.com',
                'address'       => '992 Elk Creek Road, Jonesboro, GA, 30236, Georgia',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => '038bf171-555e-11e8-a5d9-0242ac130002',
                'first_name'    => 'James',
                'last_name'     => 'flores',
                'email'         => 'jflo@example.com',
                'address'       => '939 Irving Place, Saint Louis, MO, 63146, Missouri',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => '4698d954-555e-11e8-a5d9-0242ac130002',
                'first_name'    => 'Patrick',
                'last_name'     => 'Kirk',
                'email'         => 'pkirk@example.com',
                'address'       => '730 Water Street, Martinez, CA, 94553, California',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => 'cd4e30e0-555e-11e8-a5d9-0242ac130002',
                'first_name'    => 'Alexis',
                'last_name'     => 'White',
                'email'         => 'a.white@example.com',
                'address'       => '3672 Neuport Lane, Smyrna, GA, 30080, Georgia',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => 'eb05116f-555e-11e8-a5d9-0242ac130002',
                'first_name'    => 'Nicole',
                'last_name'     => 'Olson',
                'email'         => 'nicols1992@example.com',
                'address'       => '862 Forest Avenue, Elmsford, NY, 10523, New York',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => '19e396d2-555f-11e8-a5d9-0242ac130002',
                'first_name'    => 'Tiffany',
                'last_name'     => 'Lanier',
                'email'         => 'keara1978@example.com',
                'address'       => '2905 Willow Greene Drive, Montgomery, AL, 36117, Alabama',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => '21f6081a-555f-11e8-a5d9-0242ac130002',
                'first_name'    => 'Patrick',
                'last_name'     => 'Jose',
                'email'         => 'trever_nade4@example.com',
                'address'       => '989 Walnut Street, Jackson, Mississippi, 39208',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => '749b9d09-555f-11e8-a5d9-0242ac130002',
                'first_name'    => 'Helen',
                'last_name'     => 'Looney',
                'email'         => 'keon1992@example.com',
                'address'       => '4828 Duck Creek Road, San Bruno, California, 94066',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => '7d4f9bac-555f-11e8-a5d9-0242ac130002',
                'first_name'    => 'Paul',
                'last_name'     => 'Hutchens',
                'email'         => 'mozell2008@example.com',
                'address'       => '717 Ford Street, Oakland, California, 94612',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ],
            [
                'id'            => 'dc6b1454-555f-11e8-a5d9-0242ac130002',
                'first_name'    => 'Bennie',
                'last_name'     => 'Daniels',
                'email'         => 'ben.d@example.com',
                'address'       => '554 Leisure Lane, Santa Barbara, California, 93101',
                'created'       => $this->datetime,
                'modified'      => $this->datetime
            ]
        ];

        $table->insert($data)->save();
    }
}
